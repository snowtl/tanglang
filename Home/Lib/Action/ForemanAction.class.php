<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ForemanAction
 * 明星工长
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class ForemanAction extends CommonAction {

    public function index() {
        $id = $_GET['id'];
        $M = new ForemanviewModel();
        $info = $M->getforemaninfo($id);
        if ($info) {
            if (empty($info['logo']) || !file_exists("." . $info['logo'])) {
                $info['logo'] = "/Public/web/images/nopic_193.jpg";
            }
            #获取代表作品
            $M1 = new CaseModel();
            $info[caseinfo] = $M1->getcase($info[zuopin]);
            $this->assign("info", $info);
            #装修案例
            $caselist = $M1->getcaselist($id);
            $this->assign("caselist", $caselist);
            #施工动态
            $M2 = new ShigongdtModel();
            $sgdtlist = $M2->getsgdtlist($id);
            $this->assign("sgdtlist", $sgdtlist);
            $this->assign("id", $id);
            #装修日记
            $M3 = new RijiModel();
            $rjlist = $M3->getriji($id);
            $this->assign("rjlist", $rjlist);
        } else {
            $this->error("该工长已经被禁止，请联系管理员开通.");
        }
        $this->display();
    }

    /**
     * 店铺介绍页面
     */
    public function jieshao() {
        $id = $_GET['id'];
        $M = new ForemanviewModel();
        $info = $M->getforemaninfo($id);
        if ($info) {
            if (empty($info['logo']) || !file_exists("." . $info['logo'])) {
                $info['logo'] = "/Public/web/images/nopic_193.jpg";
            }
            #获取代表作品
            $M1 = new CaseModel();
            $info[caseinfo] = $M1->getcase($info[zuopin]);
            $this->assign("info", $info);
            
            #获取 业主合影
            $M2=new HeyingModel();
            $hylist=$M2->getheying($id);
            #var_dump($hylist);
            $this->assign("hylist",$hylist);
            
            #施工工地
            $M3=new GongdiModel();
            $sggdstr=$M3->getsggdstr($id);
            $this->assign("sggdstr",$sggdstr);
            $sggdlist=$M3->getsggdlist($id);
            $this->assign("sggdlist",$sggdlist);
            
            $this->assign("id",$id);
        } else {
            $this->error("该工长已经被禁止，请联系管理员开通.");
        }
        $this->display();
    }
    /**
     * 工长列表
     */
    public function foremanlist(){
        $cid=$_SESSION['cid'];
        
        //广告位
        $admod=new AdModel();
        $cid=$this->cid;
        $adlist=$admod->getad(2, $cid);
        $this->assign("adlist",$adlist);
        
        #城市
        $Amod=new AreaModel();
        $arealist=$Amod->getcity($cid);
        $this->assign("arealist",$arealist);
        import("ORG.Util.Page");
        $M=new ForemanviewModel();
        
        $where="status=1 ";
        $areaid=$_GET['areaid'];
        if(!empty($areaid)){
            $where.=" and q_id=".$areaid;
        }
        $this->assign("areaid",$areaid);
        $where.=" and c_id=".$cid;
        
        $totalRows=$M->getforemannum($where);
        $p = new Page($totalRows, 48);
        
        $list=$M->getforemanbywhere($where,$p->firstRow,$p->listRows);
        $this->assign("list",$list);
        $this->assign("page",$p->show());
        #------------------------------列表结束
        #设计师
        $M1=new ShejiviewModel();
        $sjlist=$M1->getsheji($cid);
        $this->assign("sjlist",$sjlist);
        
        #施工动态
        $M2=new ShigongdtModel();
        $sgdtlist=$M2->getsgdtbytime();
        #var_dump($sgdtlist);
        $this->assign("sgdtlist",$sgdtlist);
        
        #经典案例
        $M3=new CaseModel();
        $caselist=$M3->getjdcase($cid);
        $this->assign("caselist",$caselist);
        #var_dump($caselist);
        
        $this->display();
    }
    
    
    
}
