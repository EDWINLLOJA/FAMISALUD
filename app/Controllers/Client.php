<?php

namespace App\Controllers;
use App\Models\HorarioModel;
use App\Models\EspecialidadModel;
use App\Models\Categoria;
class Client extends BaseController
{
    public function index()
    {

        $Horario = new HorarioModel();
        $data['Horario'] = $Horario->findAll();
        echo view('client/template/dentClient/header');
        echo view('client/Dashboard',$data);
        echo view('client/template/dentClient/footercalendar');
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
        echo view('client/template/dentClient/footercalendar');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    




    public function   reservarcita()
    {
        //$especialidad = new EspecialidadModel();
        //$datos1['especialidad'] = $especialidad->findAll();

        $categorias = new EspecialidadModel();
        $datos1['especialidad'] = $categorias->orderBy('idespecialidad', 'DESC')->findAll();

        echo view('client/template/dentClient/header');
        echo view('client/cita/reservacita',$datos1);
        echo view('client/template/dentClient/footercalendar');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    public function   reservarcita1()
    {
       
        $categorias = new categoria();
        $datos1['categoria'] = $categorias->orderBy('ID_CATEGORIA', 'DESC')->findAll();


        echo view('client/template/dentClient/header');
        echo view('client/cita/reservacita',$datos1);
        echo view('client/template/dentClient/footercalendar');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    
    
}
