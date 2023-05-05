<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('client/template/header');
        echo view('client/Dashboard');
        echo view('client/template/footer');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    public function admin()
    {
        return view('admin/index');
    }
}
