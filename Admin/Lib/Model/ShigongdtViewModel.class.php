<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of ShigongdtViewModel
 *
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class ShigongdtViewModel extends ViewModel {
    public $viewFields=array(
        "Shigongdt"=>array("id","title","fmimg","sort","jieduan","status","_type" => "LEFT"),
        "ForemanInfo"=>array("truename","_on"=>"Shigongdt.uid=ForemanInfo.a_id","_type" => "LEFT"),
        "Admin"=>array("a_name"=>"adduname","_on"=>"Shigongdt.adduid=Admin.a_id","_type" => "LEFT"),
    );
}
