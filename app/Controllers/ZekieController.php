<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ZekieController extends BaseController
{
    public function addUser()
    {
        return view("users/add");
    }
}
