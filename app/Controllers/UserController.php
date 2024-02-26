<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function addUser()
    {
        return view("users/add");
    }


    public function deleteUser()
    {
        return view("users/delete");
    }


    public function editUser()
    {
        return view("users/edit");
    }


    public function viewUser()
    {
        return view("users/view");
    }


    public function listUser()
    {
        return view("users/list");
    }
}


