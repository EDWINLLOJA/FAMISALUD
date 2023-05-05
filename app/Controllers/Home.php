<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('client/Dashboard');
    }
    public function admin()
    {
        return view('admin/index');
    }
}
