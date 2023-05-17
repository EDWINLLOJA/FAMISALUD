<?php

namespace App\Controllers;
use App\Models\Cita;
class Admin extends BaseController
{
   /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    public function dashboard()
    {
      echo view('admin/layout/head');
      echo view('admin/layout/sidenav');
      echo view('admin/layout/topnav');
      echo view('admin/dashboard');
      echo view('admin/layout/footer');
      echo view('admin/layout/js/dashboard');
        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    public function cita()
    {
      $citas = new cita();
      $data['estadocita'] = $citas->findAll();


      echo view('admin/template/headadmin');
      echo view('admin/template/head');
      echo view('admin/citas/cita',$data);
      echo view('admin/template/footadmin');

        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }
    public function admingeneral()
    {
       
      
        echo view('admin/template/headadmin');
        echo view('admin/admin');
        echo view('admin/template/footadmin');
    }
    
    public function crear_estado_cita()
    {
       
      echo view('admin/template/headadmin');
      echo view('admin/template/head');
      echo view('admin/citas/crearEstadoCita');
      echo view('admin/template/footadmin');


    }
    
    public function guardar_estadocita()
    {
      $citas = new cita();
   

        $nombre = $this->request->getVar('nombre');
        $descripcion = $this->request->getVar('descripcion');
        
      

            $datos = [
                'nombre' => $this->request->getVar('nombre'),
                'descripcion' => $this->request->getVar('descripcion')
            ];

            $citas->insert($datos);
            return $this->response->redirect((site_url('/cita')));
        
    }
    public function editar_estadocita($id = null)
    {

      $citas = new cita();
      $datos['estadocita'] = $citas->first();  
      $datos['estadocita'] = $citas->where('idestadoCita', $id)->first();
        echo view('admin/template/headadmin');
        echo view('admin/template/head');
        echo view('admin/citas/editarEstadocita',$datos);
        echo view('admin/template/footadmin');
    }
   


    public function actualizar_estadocita()
    {
      $citas = new cita();


      $datos = [
        'nombre' => $this->request->getVar('nombre'),
        'descripcion' => $this->request->getVar('descripcion')
    ];


        $id = $this->request->getVar('idestadoCita');
        $citas->update($id, $datos);
       
        return $this->response->redirect((site_url('/cita')));
    }

    public function borrar_estadocita($id = null)
    {
        $citas = new cita();
        $datosproducto = $citas->where('idestadoCita', $id)->first();

        $citas->where('idestadoCita', $id)->delete($id);
        return $this->response->redirect((site_url('/cita')));
    }

    
}
