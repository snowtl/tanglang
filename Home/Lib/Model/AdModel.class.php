<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdModel
 * 广告模块
 * @author 李雪莲 <lixuelianlk@163.com>
 */
class AdModel extends Model {

    /**
     * 获取广告位
     * @param int $id 广告位置id
     * @param int $cid 城市id
     * @return array $arr 所有的广告
     */
    public function getad($id, $cid) {
        $where = array("weizhi" => $id, "c_id" => $cid);
        $arr = $this->where($where)->field("id,img,link,title")->order("addtime desc")->select();
        #echo $this->getLastSql();
        foreach ($arr as $k => $v) {
            if ($id == 1) {

                if (file_exists("." . $v['img']) && !empty($v['img']))
                    $arr[$k]['img'] = $v['img'];
                else
                    $arr[$k]['img'] = "/Public/web/images/nopic_1920.jpg";
            }
        }
        return $arr;
    }

}
