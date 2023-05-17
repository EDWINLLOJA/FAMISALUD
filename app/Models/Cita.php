<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cita extends Model{
    protected $table      = 'estadocita';
    protected $primaryKey ='idestadoCita';
    protected $allowedFields =['nombre','descripcion'];
}

