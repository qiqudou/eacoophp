<?php
// 微信用户
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\wechat\admin;

use app\common\model\User as UserModel;
use app\wechat\model\WechatUser as WechatUserModel;
use EasyWeChat\Factory;

class WechatUser extends Base {
    protected $wechatUserModel;

    function _initialize()
    {
        parent::_initialize();
        $this->wechatUserModel = new WechatUserModel();

        $wechat_option = get_wechat_info($this->wxid);
        $options = [
           /**
             * Debug 模式，bool 值：true/false
             *
             * 当值为 false 时，所有的日志都不会记录
             */
            'debug'  => false,
            /**
             * 账号基本信息，请从微信公众平台/开放平台获取
             */
            'app_id'  => $wechat_option['appid'],         // AppID
            'secret'  => $wechat_option['appsecret'],     // AppSecret
            'token'   => $wechat_option['valid_token'],   // Token
            'aes_key' => $wechat_option['encodingaeskey'],  // EncodingAESKey，安全模式下请一定要填写！！！
            /**
             * 日志配置
             *
             * level: 日志级别, 可选为：
             *         debug/info/notice/warning/error/critical/alert/emergency
             * permission：日志文件权限(可选)，默认为null（若为null值,monolog会取0644）
             * file：日志文件位置(绝对路径!!!)，要求可写权限
             */
            'log' => [
                'level'      => 'debug',
                'permission' => 0777,
                'file'       => 'runtime/log/wechat/easywechat.logs',
            ],
        ];//dump($options);
        $this->app = Factory::officialAccount($options);
    }

    //微信用户列表
    public function index(){

        list($data_list,$total) = $this->wechatUserModel->getListByPage([],true,'subscribe_time desc');
        return builder('list')
                ->setMetaTitle('微信用户列表') // 设置页面标题
                ->addTopBtn('self',['title'=>'一键同步微信公众号粉丝','href'=>url('synWechatUsers'),'class'=>'btn btn-info btn-sm'])  // 添加素材库按钮
                ->addTopBtn('delete',['title'=>'删除']) //添加删除按钮
                ->keyListItem('headimgurl', '头像','avatar')
                ->keyListItem('nickname','昵称')
                ->keyListItem('openid1', 'OPENID')
                ->keyListItem('uid', 'UID')
                ->keyListItem('subscribe','是否关注', 'status')
                //->keyListItem('subscribe_time','关注时间', 'time')
                ->keyListItem('sex', '性别', 'array',[0=>'保密',1=>'男',2=>'女'])
                ->keyListItem('city', '城市')
                ->keyListItem('country', '国家')
                ->keyListItem('province', '省份')
                //->keyListItem('status', '状态', 'status')
                ->keyListItem('right_button', '操作', 'btn')
                ->setListData($data_list)    // 数据列表
                ->setListPage($total) // 数据列表分页
                //->addRightButton('self',['title'=>'拉黑'])
                ->fetch();
    }

    /**
     * 同步微信用户
     * @return [type] [description]
     * @date   2017-12-24
     * @author 心云间、凝听 <981248356@qq.com>
     */
    public function synWechatUsers()
    {
        $list = $this->app->user->list();
        $openids = $list['data']['openid'];
        if (!empty($openids)) {
            foreach ($openids as $key => $openId) {
                $user = $this->app->user->get($openId);
                if (!empty($user)) {
                    $res_c = $this->wechatUserModel->where('openid'.$this->wxid,$user['openid'])->count();
                    if (!$res_c) {
                        $reg_data = [
                            'sex'      =>$user['sex'],
                            'nickname' =>$user['nickname'],
                            'username' =>'WX'.time(),
                            'password' =>$user['openid'],
                            'avatar'   =>$user['headimgurl'],
                        ];
                        $userModel = new UserModel;
                        $userModel->allowField(true)->isUpdate(false)->data($reg_data)->save();
                        $uid = $userModel->uid;
                        if ($uid>0) {
                            $user['uid'] = $uid;
                            WechatUserModel::add($this->wxid, $user);
                        }
                    }
                }
            }
            $this->success('微信公众号粉丝同步成功');
            exit;
        }
        $this->error('同步失败');
        
    }

}