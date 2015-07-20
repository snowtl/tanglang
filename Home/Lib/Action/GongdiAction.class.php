<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GongdiAction
 *
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class GongdiAction extends Action {

    public function ins() {
        $uid = $_GET['uid'];
        $id = $_GET['id'];
        $foremod = new ForemanviewModel();
        $finfo = $foremod->getforemaninfo($uid);
        if ($finfo) {
            $gdmod = new GongdiModel();
            $info = $gdmod->getgongdiimg($id);
            
            $this->assign("info", $info);
        }else{
            $this->error("该用户已经被禁用!");
        }
        $this->display();
    }

}
