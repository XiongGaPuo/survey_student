<?php


namespace app\admin\controller;


use app\BaseController;
use think\facade\View;

class Cate extends BaseController
{
    public function list(){

        $depModel = new \app\common\model\dep();

//        $cates=$depModel->with('specialty.teacher.classes')->select();
        $cates=$depModel->with(['specialty.classes.teacher'])->select();
        $cates->append(['specialty.teacher.classes'])->toArray();
        dump($cates);die;

        View::assign('cates', $cates);
        return view();
    }
}