<?php

/*
会员中心控制器
2015.7.16

会员类型

代码  名称
1     普通
2     工长
3     材料商
4     设计师
5     工人

*/
class CenterAction extends CommonAction
{
	public function __construct() {
        parent::__construct();
        if(empty($_SESSION['info']['a_name']))
		{
			$this->redirect('Login/index');
		}
    }
	//普通
	public function putong()
	{
		$this->display();
	}
	
	//普通用户-我的订单
	
	public function p_order()
	{
		$orderzt=array("1"=>"完成","2"=>"已发货","3"=>"退货","4"=>"未发货");
		$P=M("Order");
		import('ORG.Util.Page');
		$map['uid']=$_SESSION['info']['a_id'];
		$count=$P->where($map)->count();
		$Page= new Page($count,25);
		$show= $Page->show();
		$list=$P->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as $k=>$v)
		{
			$list[$k]['status']=$orderzt[$v['status']];
		}
		$this->assign("list",$list);
		$this->assign("show",$show);
		$this->display();
	}
	
	//普通用户-我的订单-订单详情
	
	public function p_order_xq()
	{
		$id=$_GET['id'];
		$xq=M("");
		$pinfo=$xq->table('t_order o')->join('t_orderxiangxi x on o.id=x.orderid')->join('t_goods g on x.goodsid=g.id')->join('t_dianpu d on x.sjid=d.a_id')->where('o.id='.$id.' and x.uid='.$_SESSION['info']['a_id'])->find();
		$this->assign("pinfo",$pinfo);
		$this->display();
	}
	
	//普通用户-我的评价
	
	public function p_pj()
	{
		$orderzt=array("1"=>"完成","2"=>"已发货","3"=>"退货","4"=>"未发货");
		$P=M("Order");
		import('ORG.Util.Page');
		$map['uid']=$_SESSION['info']['a_id'];
		$count=$P->where($map)->count();
		$Page= new Page($count,25);
		$show= $Page->show();
		$list=$P->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as $k=>$v)
		{
			$list[$k]['status']=$orderzt[$v['status']];
		}
		$this->assign("list",$list);
		$this->assign("show",$show);
		$this->display();
	}
	
	//普通用户-我的评价-写评价
	public function p_write_pj()
	{
		$id=$_GET['id'];
		
		$this->display();
	}
	
	/************************/
	
	//工长
	public function gongzhang()
	{
		$this->display();
	}
	
	//材料商
	public function cailiao()
	{
		$this->display();
	}
	
	//设计师
	public function shejis()
	{
		$this->display();
	}
	
	//工人
	public function gongren()
	{
		$this->display();
	}
}
?>