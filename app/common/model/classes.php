<?php


namespace app\common\model;


use think\Model;

class classes extends Model
{
    /*public function teacher(){
        return $this->hasMany('teacher','classes_id','id');
    }*/
    public function teacher(){
        return $this->belongsTo('teacher','teacher_id','id');
    }
}