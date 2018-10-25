<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 2:43
 */

namespace app\micro_topics\model;
use app\common\model\Base;

class MicroTopicsUsers extends Base {

    protected $name = 'micro_topics_users';


    /*
     *  用户角色
     *  2018-7-14
     *  yyyvy
     * */
    public function getRoleTextAttr($value,$data){
        $role = [
            0=>'<span class="text-muted">普通</span>',
            1=>'<span class="text-primary">官方</span>'
        ];
        return $role[$data['role']];
    }

    /*
     *  用户VIP
     *  2018-7-14
     *  yyyvy
     * */
    public function getVipTextAttr($value,$data){
        $role = [
            0=>'<span class="text-muted">否</span>',
            1=>'<span class="text-danger">是</span>'
        ];
        return $role[$data['vip']];
    }

    /*
     *  用户认证
     *  2018-7-14
     *  yyyvy
     * */
    public function getAuthorTextAttr($value,$data){
        $role = [
            0=>'<span class="text-muted">否</span>',
            1=>'<span class="text-danger">是</span>'
        ];
        return $role[$data['author']];
    }
}