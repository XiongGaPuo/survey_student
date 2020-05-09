<?php


namespace app\common\model;


use think\Model;

class dep extends Model
{
    public function specialty(){
        return $this->hasMany('specialty','dep_id','id');
    }
}