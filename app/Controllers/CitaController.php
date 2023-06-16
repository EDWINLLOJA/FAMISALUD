<?php

namespace App\Controllers;
use App\Models\Cita;
class CitaController extends BaseController
{
   /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    


    //
    public function listaCita()
    {
      $conexion = mysqli_connect('localhost', 'root', '1234', 'famisalud');

      $sql = "CALL listar_citas()";
      $result = mysqli_query($conexion, $sql);
      
      $data = [];
      if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
              $data[] = $row;
          }
      }
      
      mysqli_close($conexion);
      
      echo view('admin/template/headadmin');
      echo view('admin/template/head');
      echo view('admin/cita/indexCita', ['cita' => $data]);
      echo view('admin/template/footadmin');
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

    public function guardar_cliente_cita()
{
   // Obtener los valores de los campos del formulario
   $idHorario = $this->request->getPost('idHorario');
   $idPersonal = $this->request->getPost('idPersonal');
   $idEspecialidad = $this->request->getPost('idEspecialidad');
   $idEstadoCita = 1; // Supongamos que el valor fijo para idEstadoCita es 1

   $DNI = $this->request->getPost('txtDNI');
   
   $nombrePaciente = $this->request->getPost('txtnombrecompleto');
   $fechaNacimiento = date('Y-m-d H:i:s', strtotime($this->request->getPost('fechanacimientoinput')));
   $correo = $this->request->getPost('txtemail');
   $telefono = $this->request->getPost('txttelefono');
   $sexo = $this->request->getPost('cbosexo');

   // Realizar la inserción en la base de datos
   $db = db_connect();
   $query = $db->query("CALL InsertarCita(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
       $idHorario,
       $idPersonal,
       $idEspecialidad,
       $idEstadoCita,
       $DNI,
       $nombrePaciente,
       $fechaNacimiento,
       $correo,
       $telefono,
       $sexo
   ]);

   // Redireccionar a la página deseada
   return redirect()->to('/reservarcita');
}

    
    
    
}