<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CaseAction
 * 案例
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class CaseAction extends CommonAction {

    /**
     * 装修案例
     */
    public function caselist() {
        $id = $_GET['id'];
        $this->assign("id", $id);
        $M = new ForemanviewModel();
        $info = $M->getforemaninfo($id);
        if ($info) {
            if (empty($info['logo']) || !file_exists("." . $info['logo'])) {
                $info['logo'] = "/Public/web/images/nopic_193.jpg";
            }
            $this->assign("info", $info);
            #获取户型    
            $hxmod = new HxcategoryModel();
            $dxlist = $hxmod->gethuxing();
            $this->assign("dxlist", $dxlist);
            #获取风格
            $fgmod = new FgcategoryModel();
            $fglist = $fgmod->getfengge();
            $this->assign("fglist", $fglist);
            #预算
            $yusuan = array(
                0 => array("key" => "0-5", "val" => "5万以下"),
                1 => array("key" => "5-10", "val" => "5-10万"),
                2 => array("key" => "10-20", "val" => "10-20万"),
                3 => array("key" => "20-40", "val" => "20-40万"),
                4 => array("key" => "40-", "val" => "40万以上")
            );
            $this->assign("yusuan", $yusuan);
            #面积
            $mianji = array(
                0 => array("key" => "0-50", "val" => "50㎡"),
                1 => array("key" => "60-80", "val" => "60-80㎡"),
                2 => array("key" => "80-100", "val" => "80-100㎡"),
                3 => array("key" => "100-120", "val" => "100-120㎡"),
                4 => array("key" => "120-150", "val" => "120-150㎡"),
                5 => array("key" => "150-", "val" => "150㎡以上")
            );
            $this->assign("mianji", $mianji);
            $filter=array();
            $filter["hid"]=$_GET['hid'];
            $filter["fid"]=$_GET['fid'];
            $filter["ys"]=$_GET['ys'];
            $filter["mianji"]=$_GET['mianji'];
            $this->assign("filter",$filter);
            $filterstr['hxname']="<a href='".U('Case/caselist')."?id=".$id."&hid=&fid=".$filter['fid']."&ys=".$filter['ys']."&mianji=".$filter['mianji']."'>".$hxmod->gethxname($filter["hid"])."</a>";
            
            
            
            
        } else {
            $this->error("该工长已经被禁止，请联系管理员开通.");
        }

        $this->display();
    }

}
