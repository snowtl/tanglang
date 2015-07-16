<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShigongdtModel
 * 施工动态
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class ShigongdtModel extends Model {

    /**
     * 获取正在施工的施工动态
     * @param int $cid 城市id
     * @return array $arr 所有的广告
     */
    public function getsgdt($cid) {
        $where = "t_shigongdt.c_id=".$cid." and t_shigongdt.status=1 and (t_shigongdt.jieduan>1 and t_shigongdt.jieduan<7)";
        
        $arr = $this->where($where)->join("t_foreman_info as i on i.a_id=t_shigongdt.uid")->field("t_shigongdt.id,t_shigongdt.title,t_shigongdt.addtime,t_shigongdt.jieduan,i.truename")->order("t_shigongdt.addtime desc")->select();
        #echo $this->getLastSql();
        $config_sg=include './Home/Conf/config.php';
        #var_dump($config_sg);
        foreach ($arr as $k=>$v){
            $arr[$k]['shigong']=$config_sg['jieduan'][$v['jieduan']];
            $sz=explode(" ", $v['addtime']);
            $rq=explode("-", $sz[0]);
            $arr[$k]['riqi']=$rq[1]."月".$rq[2]."日";
            $arr[$k]['nyr']=$sz[0];
        }
        return $arr;
    }

}
