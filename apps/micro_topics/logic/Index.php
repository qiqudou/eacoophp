<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.6.27
 * Time: 3:53
 */
namespace app\micro_topics\logic;

use app\common\logic\Base;
use app\common\model\User as UserModel;
use app\micro_topics\model\MicroTopics as ListModel;
use app\micro_topics\model\MicroTopicsComment as CommentModel;

class Index extends Base{


    /*
     *  获取日回帖排行
     *  yyyvy
     *  2018-6-27
     * */
    public function reply_day(){
        $reply_day_ranking = CommentModel::where(['create_time'=>['>',strtotime(date('Y-m-d'))],'create_time'=>['<',time()]])->select();

        if($reply_day_ranking){
            $day_ranking_list = []; //定义一个日回帖排行多维数组
            foreach ($reply_day_ranking as $value){
                if($day_ranking_list){
                    foreach ($day_ranking_list as $key=>$row){
                        if($row['uid'] == $value['uid']){
                            $day_ranking_list[$key]['num'] = $day_ranking_list[$key]['num']+1;
                        }else{
                            $userinfo = UserModel::where('uid', $value['uid'])->find();
                            $day_ranking_list[] = ['uid'=>$value['uid'],'num'=>1,'avatar'=>$userinfo['avatar']];
                        }
                    }
                }else{
                    $userinfo = UserModel::where('uid', $value['uid'])->find();
                    $day_ranking_list[] = ['uid'=>$value['uid'],'num'=>1,'avatar'=>$userinfo['avatar']];
                }
            }
            //第一个参数指定排序的列，排序日排行多维数组
            foreach($day_ranking_list as $res){
                $sortAux_day[] = $res['num'];
            }
            array_multisort($sortAux_day, SORT_DESC, $day_ranking_list);

            //删除二维数组中重复的元素
            $A = Array();
            $arrNew = Array();
            foreach($day_ranking_list AS $val){
                if( isset($A[$val['uid']]) ){
                    continue;
                }else{
                    $A[$val['uid']] = true;
                    $arrNew[] = $val;
                }
            }
            $day_ranking_list = $arrNew;
            return $day_ranking_list;
        }
    }

    /*
     *  获取周回帖排行
     *  yyyvy
     *  2018-6-27
     * */
    public function reply_week(){
        $reply_week_ranking = CommentModel::where(['create_time'=>['>',strtotime(date('Y-m-d',strtotime("-7 day")))],'create_time'=>['<',time()]])->select();
        if($reply_week_ranking){
            $week_ranking_list = []; //定义一个周回帖排行多维数组
            foreach ($reply_week_ranking as $value){
                if($week_ranking_list){
                    foreach ($week_ranking_list as $key=>$row){
                        if($row['uid'] == $value['uid']){
                            $week_ranking_list[$key]['num'] = $week_ranking_list[$key]['num']+1;
                        }else{
                            $userinfo = UserModel::where('uid', $value['uid'])->find();
                            $week_ranking_list[] = ['uid'=>$value['uid'],'num'=>1,'avatar'=>$userinfo['avatar']];
                        }
                    }
                }else{
                    $userinfo = UserModel::where('uid', $value['uid'])->find();
                    $week_ranking_list[] = ['uid'=>$value['uid'],'num'=>1,'avatar'=>$userinfo['avatar']];
                }
            }
            //第一个参数指定排序的列，排序周排行多维数组
            foreach($week_ranking_list as $res){
                $sortAux_week[] = $res['num'];
            }
            array_multisort($sortAux_week, SORT_DESC, $week_ranking_list);
            //删除二维数组中重复的元素
            $A = Array();
            $arrNew = Array();
            foreach($week_ranking_list AS $val){
                if( isset($A[$val['uid']]) ){
                    continue;
                }else{
                    $A[$val['uid']] = true;
                    $arrNew[] = $val;
                }
            }
            $week_ranking_list = $arrNew;
            return $week_ranking_list;
        }
    }


    /*
     *  热门帖子
     *  2018-6-27
     *  yyyvy
     * */
    public function hot_post(){
        $result = ListModel::where(['status'=>1,'overhead' => 0])->order('view desc')->paginate(10);
        return $result;
    }
}