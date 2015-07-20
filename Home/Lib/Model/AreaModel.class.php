<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AreaModel
 * 城市模块
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class AreaModel extends Model {

    /**
     * 获取城市状态
     * @param int $id 城市id
     * @return bool true=开启,false=不开启
     */
    public function getcitystatus($id) {
        $where = array("region_id" => $id);
        $arr = $this->where($where)->field("agency_id")->find();
        #echo $this->getLastSql();exit;
        if ($arr['agency_id'] == 1)
            return true;
        else
            return false;
    }
    /**
     * 获取区域
     * @param int $cid 城市编号
     * @return array 城市地区数组
     */
    public function getcity($cid){
        $list=$this->where("parent_id=".$cid." and agency_id=1")->field("region_id as id,region_name as cityname")->select();
        #echo $this->getLastSql();
        return $list;
    }
    
}
