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
        
        $arr = $this->where($where)->join("t_foreman_info as i on i.a_id=t_shigongdt.uid")->field("t_shigongdt.id,t_shigongdt.title,t_shigongdt.addtime,t_shigongdt.jieduan,i.truename")->order("t_shigongdt.addtime desc")->limit("4")->select();
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
    /**
     * 获取 施工动态
     * @param int $uid 会员id
     * @return array $arr
     */
    public function getsgdtlist($uid,$num=8){
        $arr=$this->table("t_shigongdt as s")->join("t_hxcategory as h on h.id=s.huxing")->field("s.id,h.name as hxname,s.title,s.huxing,s.mianji,s.yusuan,s.yezhu,s.jieduan,a.region_name as cname")->join("t_area as a on a.region_id=s.c_id")->where("s.uid=".$uid)->limit($num)->select();
        $config_sg=include './Home/Conf/config.php';
        foreach ($arr as $k=>$v){
            $arr[$k]['shigong']=$config_sg['jieduan'][$v['jieduan']];
        }
        return $arr;
    }
    /**
     * 获取施工动态
     * @param int $num 按照时间排序的前10条
     * @return array $arr
     */
    public function getsgdtbytime($num=10){
        $arr=  $this->table("t_shigongdt as s")->field("s.id,s.title,i.truename")->join("t_foreman_info as i on i.a_id=s.uid")->where("1")->order("s.addtime desc")->limit($num)->select();
       # echo $this->getLastSql();
        return $arr;
    }
}
