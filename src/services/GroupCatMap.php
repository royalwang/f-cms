<?php

class Service_GroupCatMap {
    public static function getGroupByCat($catId) {
        $group_cat_map = new FTable('member_group_cate_map');
        $group_cat_db = $group_cat_map->where(array('cat_id' => $catId))->select();

        $group = array();
        foreach ($group_cat_db as $row) {
            $group[] = $row['gid'];
        }
        return $group;
    }
}