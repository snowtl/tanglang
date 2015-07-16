<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonAction
 * 公共类
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class CommonAction extends Action {
    //put your code here
    public $cid;
    public function __construct() {
        parent::__construct();
        $systemConfig = include WEB_ROOT . 'Common/systemConfig.php';
        
        $this->cid=$_GET['cid'];
        $this->cid=empty($this->cid)?52:$this->cid;
        if(!$this->is_city($this->cid)){
            //未开启
            $this->error("该城市未开启,请联系管理员！",U("Index/index"));
            exit;
        }
        $_SESSION['cid']=  $this->cid;
    }
    /**
     * 判断城市是否开启
     */
    protected function is_city($cid){
        $areamod=new AreaModel();
        $istrue=$areamod->getcitystatus($cid);
        return $istrue;
    }
}
