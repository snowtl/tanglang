<?php

/*
注册控制器
2015.7.15

会员类型

代码  名称
1     普通
2     工长
3     材料商
4     设计师
5     工人
*/
class RegisterAction extends CommonAction
{
	public function index()
	{
		
		$type=$_GET['type'];
		$d=M("Area");
		$map['parent_id']=$_SESSION['cid'];
		$area=$d->where($map)->select();
		$this->assign("area",$area);
		$this->assign("type",$type);
		switch($type)
        {
		  case 2:
			$this->display("index_gz");
			break;
		  case 3:
			$this->display("index_cys");
			break;
		  case 4:
			$this->display("index_sjs");
			break;			
		  case 5:
			$this->display("index_gr");
			break;
		  default:
			$this->display();
			break;
        }
		
	}
	public function r_do()
	{
		$data=$_POST['info']; //主表
		$data['a_pwd']=md5($data['a_pwd']);
		$datas['movphone']=$data['movphone'];//手机
		unset($data['movphone']);
		//主表
		$M=M("Member");
		$rs=$M->add($data);
		if($rs)
		{
			$datas=$_POST['infos'];
			$datas['c_id']=$_SESSION['cid'];//地区id
			$datas['a_id']=$M->getLastInsID();//角色id
			//附加表
			$table=array("1"=>"Webmember","2"=>"Foreman_info","3"=>"Dianpu","4"=>"Sheji","5"=>"Gongren");
			$S=M($table[$data['a_type']]);
			
			$re=$S->add($datas);
			
			if($re)
			{
				$this->success("注册成功");
			}else
			{
				$this->error("注册失败");
			}
		}else{
			$this->error("失败");	
		}	
	}
}
?>