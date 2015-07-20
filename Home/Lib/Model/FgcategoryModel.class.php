<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HxcategoryModel
 * 风格
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class FgcategoryModel extends Model {
    /**
     * 风格
     */
    public function getfengge(){
        $list=$this->where(1)->field("id,name")->select();
        return $list;
    }
}
