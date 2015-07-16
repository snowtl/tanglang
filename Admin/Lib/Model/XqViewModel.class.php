<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of HxcategoryViewModel
 *
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class XqViewModel extends ViewModel {
    public $viewFields=array(
        "Xq"=>array("id","name","addtime","_type" => "LEFT"),
        "Admin"=>array("a_id","a_name"=>"adduname","_on"=>"Xq.adduid=Admin.a_id","_type" => "LEFT"),
        "Provice"=>array("region_name"=>"p_name","region_id"=>"p_id","_table"=>"t_area","_on"=>"Provice.region_id=Xq.p_id","_type" => "LEFT"),
        "City"=>array("region_name"=>"c_name","region_id"=>"c_id","_table"=>"t_area","_on"=>"City.region_id=Xq.c_id","_type" => "LEFT"),
        "qu"=>array("region_name"=>"q_name","region_id"=>"q_id","_table"=>"t_area","_on"=>"qu.region_id=Xq.q_id","_type" => "LEFT"),
    );
}
