<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 18:43
 */
namespace app\micro_topics\logic;

use app\common\logic\Base;

class Category extends Base{


    /**
     * 获取分类选择项
     * @param  string $taxonomy [description]
     * @return [type] [description]
     * @date   2018-02-22
     * @author 心云间、凝听 <981248356@qq.com>
     */
    public function getOptTerms($taxonomy='micro_topics')
    {
        $data_list = model('common/Terms')->where(['taxonomy'=>$taxonomy])->column('name','term_id');
        return $data_list;
    }
}