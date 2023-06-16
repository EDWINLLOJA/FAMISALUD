<?php

namespace App\Controllers;
use App\Models\Cita;
class EstadoCitaController extends BaseController
{
   /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    


    //
    public function lista_estado_cita()
    {
      $citas = new cita();
      $data['estadocita'] = $citas->findAll();


      echo view('admin/template/headadmin');
      echo view('admin/template/head');
      echo view('admin/estadocita/citaEstado',$data);
      echo view('admin/template/footadmin');

        //return view('client/template/header');
        //return view('client/Dashboard');
        //return view('client/template/footer');
    }


    


   
   
    
    public function crear_estado_cita()
    {
       
      echo view('admin/template/headadmin');
      echo view('admin/template/head');
      echo view('admin/estadocita/crearEstadoCita');
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
            return $this->response->redirect((site_url('/lista_estado_cita')));
        
    }
    public function editar_estadocita($id = null)
    {

      $citas = new cita();
      $datos['estadocita'] = $citas->first();  
      $datos['estadocita'] = $citas->where('idestadoCita', $id)->first();
        echo view('admin/template/headadmin');
        echo view('admin/template/head');
        echo view('admin/estadocita/editarEstadocita',$datos);
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
       
        return $this->response->redirect((site_url('/lista_estado_cita')));
    }

    public function borrar_estadocita($id = null)
    {
        $citas = new cita();
        $datosproducto = $citas->where('idestadoCita', $id)->first();

        $citas->where('idestadoCita', $id)->delete($id);
        return $this->response->redirect((site_url('/lista_estado_cita')));
    }

    
}
