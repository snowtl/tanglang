<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RijiModel
 * 日记
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class RijiModel extends Model {
    /**
     * 获取 装修日记 列表
     * @param int $uid 会员编号
     * @param int $num 数目
     * @return type
     */
    public function getriji($uid,$num=4){
        $list=$this->where("uid=".$uid)->limit($num)->field("id,title,fmimg,jianjie")->select();
        return $list;
    }
}
