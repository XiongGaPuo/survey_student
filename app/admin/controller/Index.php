<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\BaseController;


class Index extends BaseController
{
    public function initialize(){
        if (session('?admin.id')){
            $this->redirect('admin/home');
        }
    }

    public function login()
    {

        if (request()->isAjax()){
            $data=[
                'adminname' =>input('post.adminname'),
                'password' =>input('post.password'),
            ];
            $indexModel= new \app\common\model\admin();
            $result=$indexModel->login($data);

            if($result ==1){

                $this->success('登录成功!','admin/home/index');
            }else{
                $this->error($result);
            }


        }
        return view();
    }
}
