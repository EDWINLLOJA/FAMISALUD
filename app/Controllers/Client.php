<?php

namespace App\Controllers;
use App\Models\HorarioModel;
class Client extends BaseController
{
    public function index()
    {

        $Horario = new HorarioModel();
        $data['Horario'] = $Horario->findAll();
        echo view('client/template/dentClient/header');
        echo view('client/Dashboard',$data);
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
    




    public function   reservarcita()
    {
        echo view('client/template/dentClient/header');
        echo view('client/cita/reservacita');
        echo view('client/template/dentClient/footer');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    


}
