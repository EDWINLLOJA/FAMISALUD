<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Combos extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var HTTP\IncomingRequest
     */
    protected $request;

    public function combo()
    { 
        $conexion=mysqli_connect('localhost','root','1234','famisalud');
    $continente=$_POST['continente'];
    

    $sql=" CALL Obtenercalendario($continente)";



        
    $result=mysqli_query($conexion,$sql);

    $cadena="
            <select class='form-control' id='ID_SUBCAT' name='ID_SUBCAT'>
            ";

    while ($ver=mysqli_fetch_row($result)) {
        $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
    }

    echo  $cadena."</select>";

        
    }
    
    


    public function especialidarhora()
    { 
        $conexion=mysqli_connect('localhost','root','1234','famisalud');
    $continente=$_POST['continente'];
    

    $sql="CALL ObtenerEspecialidadesPorFecha('$continente')";



        
    $result=mysqli_query($conexion,$sql);

    $cadena="
            <select class='form-select bg-light border-0 mb-3' style='height: 40px;' id='ID_SUBCAT' name='ID_SUBCAT'>
            ";

    while ($ver=mysqli_fetch_row($result)) {
        $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
    }

    echo  $cadena."</select>";

        
    }


//DATOS DE CALENDARIO
public function datoscalendario()
{
    $conexion = mysqli_connect('localhost', 'root', '1234', 'famisalud');
    $continente = $_POST['continente'];

    $sql = "CALL Obtenercalendario($continente)";
    $result = mysqli_query($conexion, $sql);

    $eventos = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $evento = array(
            'title' => $row['nombreespecialista'],
            'start' => $row['fecha'] . 'T' . $row['hora'],
            'idhorario' => $row['idHorario'],
            'idpersonal' => $row['idPersonal'],
            'idespecialidad' => $row['idespecialidad']
        );

        $eventos[] = $evento;
    }

    echo json_encode($eventos);
}


public function datospaciente()
{
    $conexion = mysqli_connect('localhost', 'root', '1234', 'famisalud');
    $continente = $_POST['continente'];

    $sql = "SELECT * FROM paciente WHERE DNI='$continente'";
    $result = mysqli_query($conexion, $sql);

    $paciente = mysqli_fetch_assoc($result);

    // Generar respuesta JSON con los datos del paciente
    echo json_encode($paciente);
}
    


}