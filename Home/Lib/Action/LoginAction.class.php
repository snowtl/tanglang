<?php

/*
登录控制器
2015.7.16
*/
class LoginAction extends CommonAction
{
	public function index()
	{
		if(!empty($_SEEION['username']))
		{
			$this->display();
		}else
		{
			$this->login();
		}	
	}
	
	public function login()
	{
		if(IS_POST)
		{
			
		}else{
			$this->display("login");	
		}
	}
	
}
?>