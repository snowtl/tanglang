<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GroupModel
 * 团购活动
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class GroupModel extends Model {

    /**
     * 获取 团购活动
     * @param int $cid 城市id
     * @return array $arr 所有的广告
     */
    public function getgroup($cid) {
        $where = "c_id=".$cid." and status=1";
        $arr = $this->where($where)->field("id,title,address,")->order("addtime desc")->select();
        
        foreach ($arr as $k=>$v){
            
        }
        return $arr;
    }

}
