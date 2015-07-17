<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdModel
 * 工长模块
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class ForemanviewModel extends Model {

    /**
     * 获取工长
     * @param int $cid 城市id
     * @param int $page  页数
     * @param int $epage 每页的记录数
     * @return array $arr 10条工长
     */
    public function getforeman($cid, $page = 1, $epage = 10) {
        $page = empty($page) ? 1 : $page;
        $start = ($page - 1)*$epage;
        $where = array("c_id" => $cid, "status" => 1);
        $arr = $this->where($where)->field("a_id,truename,logo,koubei,comments")->limit($start . "," . $epage)->order("create_time desc")->select();
        #echo $this->getLastSql();exit;
        foreach ($arr as $k => $v) {
            if (file_exists("./avatar/" . $v['logo']) && !empty($v['logo']))
                $arr[$k]['logo'] = "/avatar/" . $v['logo'];
            else
                $arr[$k]['logo'] = "/Public/web/images/nopic_193.jpg";
        }
        return $arr;
    }
    /**
     * 获取工长
     * @param int $id 工长编号
     * @return array 工长的详细信息
     */
    public function getforemaninfo($id){
        $info=$this->where("a_id=".$id)->find();
        return $info;
    }
    
    
    
    /**
     * 检查工长是否满足分组
     */
    public function is_fore_group($cid, $page = 1, $epage = 10) {
        $where = array("c_id" => $cid, "status" => 1);
        $page = empty($page) ? 1 : $page;
        $start = ($page - 1)*$epage;
        $list = $this->where($where)->limit($start . "," . $epage)->select();
        if($list){
            return true;
        }else{
            return FALSE;
        }
    }
    

}
