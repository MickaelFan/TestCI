<?php namespace App\Controllers; 


use App\Models\Users;

class AdminController extends BaseController
{
    public function index(){
        $user= new Users();
        $data['user']=$user->findAll();
        return view('admin/index',$data);
    }

    public function dirAjout(){
        return view('admin/ajouter');
    }
}

?>