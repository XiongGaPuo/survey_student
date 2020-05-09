<?php


namespace app\common\model;


use think\Model;

class teacher extends Model
{
    public function classes(){
        return $this->hasMany('classes','teacher_id','id');
    }
}