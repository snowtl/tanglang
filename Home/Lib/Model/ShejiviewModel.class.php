<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShejiviewModel
 * 设计师
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class ShejiviewModel extends Model {
    /**
     * 获取设计师
     * @param int $cid 城市编号
     */
    public function getsheji($cid,$num=4){
        $list=$this->where("c_id=".$cid." and status=1")->field("a_id,truename,logo")->order("create_time desc")->limit($num)->select();
        $M=new CaseModel();
        foreach ($list as $k=>$v){
            if (file_exists("./avatar/" . $v['logo']) && !empty($v['logo']))
                $list[$k]['logo'] = "/avatar/" . $v['logo'];
            else
                $list[$k]['logo'] = "/Public/web/images/nopic_193.jpg";
            $list[$k]['casenum']=$M->getcasenum($v['a_id']);
        }
        return $list;
    }
    
    
}
