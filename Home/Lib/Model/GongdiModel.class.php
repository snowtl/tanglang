<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GongdiModel
 * 施工工地
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class GongdiModel extends Model {
    /**
     * 获取施工工地
     * @param int $uid 会员编号
     * @return array 施工工地列表
     */
    public function getsggdlist($uid){
        $list=$this->where("uid=".$uid." and status=1")->field("id,name,fmimg")->select();
        return $list;
    }
    /**
     * 获取施工工地标题组合
     * @param int $uid 会员编号
     * @return string $str 施工工地标题字符串
     */
    public function getsggdstr($uid){
        $list=  $this->where("uid=".$uid." and status=1")->field("name")->select();
        $str="";
        foreach($list as $k=>$v){
            $str.=$v['name'].",";
        }
        $a=mb_strlen($str);
        $str=mb_substr($str, 0, $a-1);
        return $str;
    }
    /**
     * 获取工地图片和名称
     * @param int $id 工地编号
     * @return array $arr 施工工地
     */
    public function getgongdiimg($id){
        $where="id=".$id." and status=1";
        $list=$this->where($where)->field("gdimg,name")->find();
        $gdimg=json_decode($list['gdimg']);
        $arr=array(
            "gdimg"=>$gdimg,
            "name"=>$list['name']
        );
        return $arr;
    }
}
