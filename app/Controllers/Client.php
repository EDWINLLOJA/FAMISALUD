<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        echo view('client/template/dentClient/header');
        echo view('client/Dashboard');
        echo view('client/template/dentClient/footer');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    public function admin()
    {
        return view('admin/index');
    }

    public function nosotros()
    {
        echo view('client/template/dentClient/header');
        echo view('client/nosotros');
        echo view('client/template/dentClient/footer');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    







}
