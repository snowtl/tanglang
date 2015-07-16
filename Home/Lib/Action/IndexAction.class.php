<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
        
	//广告位
        $admod=new AdModel();
        $cid=$this->cid;
        $adlist=$admod->getad(1, $cid);
        $this->assign("adlist",$adlist);
        #var_dump($adlist);
        #var_dump($_SESSION['cid']);
        //工长
        $formod=new ForemanviewModel();
        $forlist=$formod->getforeman($cid);
        $this->assign("forlist",$forlist);
        //正在施工
        $sgmod=new ShigongdtModel();
        $sgdtlist=$sgmod->getsgdt($cid);
        $this->assign("sgdtlist",$sgdtlist);
        #var_dump($sgdtlist);
        //团购活动
        
        
        $this->display();
    }
    //----------------------------------------------------------------------
    /**
     * ajax 
     * 获取工长
     */
    public function ajax_getforeman(){
        header("Content-Type:application/json; charset=utf-8");
        $page=$_GET['click'];
        $formod=new ForemanviewModel();
        $cid=$_SESSION['cid'];
        
        if($formod->is_fore_group($cid, $page)){
            $list=$formod->getforeman($cid, $page);
        }else{
            $list=$formod->getforeman($cid, 1);
        }
        $data=array();
        if(empty($list)){
            $data['status']=0;
            $data['list']=array();
        }else{
            $data['status']=1;
            $data['list']=$list;
        }
        echo json_encode($data);
    }
}