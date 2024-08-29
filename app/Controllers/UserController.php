<?php namespace App\Controllers;

use App\Models\Users;
class UserController extends BaseController
{
    public function index(){

        $user = new Users();
        $data['user']=$user->findAll();
        return view('users/index',$data);
    }
}
?>