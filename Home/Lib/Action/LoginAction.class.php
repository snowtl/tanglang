<?php

/*
登录控制器
2015.7.16

会员类型

代码  名称
1     普通
2     工长
3     材料商
4     设计师
5     工人

*/
class LoginAction extends CommonAction
{
	public function index()
	{
		if(empty($_SESSION['info']['a_name']))
		{
			$this->login();
		}else{
			$this->type($_SESSION['info']['a_type']);
		}	
	}
	
	public function login()
	{
		if(IS_POST)
		{
			$M=M("Member");
			$map['a_name']=$_POST['uname'];
			$pwd=md5($_POST['pwd']);
			$info=$M->where($map)->find();
			if($info['a_pwd']==$pwd)
			{
				$_SESSION['info']=$info;
				$this->type($info['a_type']);
			}else
			{
				$this->error("请检查用户名密码是否输入有误");
			}
		}else{
			$this->display("login");	
		}
	}
	//判断用户类型
	public function type($type)
	{
		switch($type)
		{
			case 2:
				$this->redirect('Center/gongzhang');
				break;
			case 3:
				$this->redirect('Center/cailiao');
				break;
			case 4:
				$this->redirect('Center/shejis');
				break;			
			case 5:
				$this->redirect('Center/gongren');
				break;
			default:
				$this->redirect('Center/putong');
				break;	
		}
	}
	//退出
	public function loginout()
	{
		unset($_SESSION['info']);
		session_destroy();
		$this->redirect('Login/index');
		
	}
}
?>