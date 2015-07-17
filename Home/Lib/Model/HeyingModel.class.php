<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeyingModel
 * 业主合影
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class HeyingModel extends Model {
    /**
     * 获取业主合影
     * @param int $uid 工长编号
     * @return array 业主合影列表
     */
    public function getheying($uid){
        $list=$this->where("uid=".$uid." and status=1")->field("id,name,img")->order("addtime desc")->select();
        return $list;
    }
    
}
