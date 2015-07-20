<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CaseModel
 *
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class CaseModel extends Model {

    /**
     * 获取装修案例
     * @param string $id 编号
     * @return string 案例名称
     */
    public function getcase($id) {
        $list = $this->where("id in(" . $id . ")")->field("title")->select();
        #echo $this->getLastSql();
        $str = "";
        foreach ($list as $k => $v) {
            $str = $v['title'] . " ";
        }
        return $str;
    }

    /**
     * 获取装修案例
     * @param int $uid 装修案例添加人编号
     * @return array 装修案例列表
     */
    public function getcaselist($uid) {
        $list = $this->table("t_case as c")->join("t_hxcategory as h on h.id=c.hid")->join("t_fgcategory as f on f.id=c.fid")->where("c.uid=" . $uid)->field("c.id,c.title,c.fmimg,c.hid,c.fid,c.price,h.name as hxname,f.name as fgname")->select();
        return $list;
    }

    /**
     * 获取装修案例数目
     * @param int $uid 会员的编号
     * @return int $num 案例的数目
     */
    public function getcasenum($uid) {
        $num = $this->where("uid=" . $uid . " and status=1")->count();
        return $num;
    }

    /**
     * 获取经典案例
     * @param int $cid 城市编号
     * @return array $arr 案例
     */
    public function getjdcase($cid, $num = 5) {
        $where = array("c.type" => 1, "c.status" => 1, "c.is_jd" => 1, "c.c_id" => $cid);
        $arr = $this->table("t_case as c")->join("t_fgcategory as f on f.id=c.fid")->join("t_hxcategory as h on h.id=c.hid")->where($where)->order("c.addtime desc")->field("c.id,c.title,c.fmimg,c.hid,c.fid,f.name as fgname,h.name as hxname")->limit($num)->select();
        foreach ($arr as $k => $v) {
            if (file_exists("." . $v['fmimg']) && !empty($v['fmimg']))
                $arr[$k]['fmimg'] = $v['fmimg'];
            else
                $arr[$k]['fmimg'] = "/Public/web/images/nopic_193.jpg";
        }
        return $arr;
    }

}
