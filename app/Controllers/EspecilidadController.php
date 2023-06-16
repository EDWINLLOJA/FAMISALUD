<?php

namespace App\Controllers;

use App\Models\EspecialidadModel;

class EspecialidadController extends BaseController
{
  // Controlador
public function listarcalendario()
{
    
    $conexion=mysqli_connect('localhost','root','1234','famisalud');
    $continente=$_POST['continente'];
    
        $sql="SELECT * FROM Horario where idespecialidad='$continente'";
    
        $result=mysqli_query($conexion,$sql);
    
        $cadena="
                <select class='form-control' id='idespecialidad' name='idespecialidad'>
                ";
    
        while ($ver=mysqli_fetch_row($result)) {
            $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
        }
    
        echo  $cadena."</select>";

}


public function calendariomodal()
{
    return view('client/cita/calendario');
}

}