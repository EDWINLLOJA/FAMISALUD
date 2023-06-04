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
    

    $sql="CALL ObtenerEspecialidadesPorFecha('20-06-2023')";



        
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
    




}