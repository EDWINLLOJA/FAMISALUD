<?php 

namespace App\Models;

use CodeIgniter\Model;

class HorarioModel extends Model
{
    protected $table      = 'Horario';
    protected $primaryKey ='idHorario';
    protected $allowedFields =['hora','fecha','turno','idPersonal','idespecialidad'];
}



