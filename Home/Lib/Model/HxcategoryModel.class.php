<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HxcategoryModel
 * 户型
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class HxcategoryModel extends Model {
    /**
     * 户型
     * @return array 数组
     */
    public function gethuxing(){
        $list=$this->where(1)->field("id,name")->select();
        return $list;
    }
    /**
     * 户型
     * @param int $id 户型编号
     * @return string 户型名称 Description
     */
    public function gethxname($id){
        $string=$this->where("id=".$id)->field("name")->find();
        return $string['name'];
    }
    
}
