<?php

namespace App\Controllers;
use App\Models\HorarioModel;
class HorarioController extends BaseController
{
    public function filtrardatoshorario()
    {
      
      $data['Horario'] = [];

      if ($this->request->getMethod() === 'post') {
          // Obtener la fecha enviada desde el formulario
          $fecha = $this->request->getPost('fecha');

          // Llamar al procedimiento almacenado
          $query = $this->db->query("CALL ObtenerHorariosPorFecha('$fecha')");

          // Obtener los resultados del procedimiento almacenado
          $data['Horario'] = $query->getResultArray();

          // Cerrar el cursor de resultados
          $query->closeCursor();
      }

      echo view('client/template/dentClient/header');
      echo view('client/Dashboard', $data);
      echo view('client/template/dentClient/footer');
      //return view('client/template/header');
      //return view('client/Dashboard');
      //return view('client/template/footer');
      
    }
}
