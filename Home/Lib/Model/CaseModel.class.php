<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CaseModel
 *
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class CaseModel extends Model {
    /**
     * 获取装修案例
     * @param string $id 编号
     * @return string 案例名称
     */
    public function getcase($id){
        $list=$this->where("id in(".$id.")")->field("title")->select();
        #echo $this->getLastSql();
        $str="";
        foreach ($list as $k=>$v){
            $str=$v['title']." ";
        }
        return $str;
    }
    /**
     * 获取装修案例
     * @param int $uid 装修案例添加人编号
     * @return array 装修案例列表
     */
    public function getcaselist($uid){
        $list=$this->table("t_case as c")->join("t_hxcategory as h on h.id=c.hid")->join("t_fgcategory as f on f.id=c.fid")->where("c.uid=".$uid)->field("c.id,c.title,c.fmimg,c.hid,c.fid,c.price,h.name as hxname,f.name as fgname")->select();
        return $list;
    }
    
    
}
