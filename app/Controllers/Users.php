<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        $data['menu']='master';
        $data['submenu']='users';

        $users= new UsersModel();
        $data['users'] = $users->findAll();
        return view('master/users/table',$data);
    }
}
