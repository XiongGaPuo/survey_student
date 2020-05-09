<?php
declare (strict_types = 1);

namespace app\common\model;

use think\Model;

/**
 * @mixin think\Model
 */
class admin extends Model
{
    public function login($data){
        $result=$this->where($data)->find();

        if ($result){
            $sessionData=[
                'id' => $result['id'],
                'adminname' => $result['adminname'],
                'email' => $result['email'],
                'role_id' => $result['role_id'],
            ];
            session('admin',$sessionData);

            return 1;
        }else{
            return '账号或密码错误';
        }
    }
}
