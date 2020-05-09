<?php


namespace app\common\model;


use think\Model;

class specialty extends Model
{
    public function teacher(){
        return $this->hasMany('teacher','specialty_id','id');
    }

    public function classes(){
        return $this->hasMany('classes','specialty_id','id');
    }
}