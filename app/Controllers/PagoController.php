<?php

namespace App\Controllers;

class PagoController extends BaseController
{
    public function pagocliente()
    {


        $idHorario = $this->request->getVar('idhorario');
    return view('client/pago/pago', ['idHorario' => $idHorario]);

 
    }
    
    
    
}
