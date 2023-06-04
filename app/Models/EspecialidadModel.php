<?php 

namespace App\Models;

use CodeIgniter\Model;

class EspecialidadModel extends Model
{
    protected $table      = 'especialidad';
    protected $primaryKey = 'idespecialidad';
    protected $allowedFields = ['Especialidad', 'descripcion', 'estado'];

    public function obtenerCalendario($especialidad)
    {
        // Ejecutar el procedimiento almacenado para obtener los eventos del calendario
        $query = $this->db->query("CALL Obtenercalendario($especialidad)");
    
        // Obtener los resultados de la consulta
        $resultados = $query->result_array();
    
        // Cerrar la conexión a la base de datos
        $this->db->close();
    
        // Devolver los eventos obtenidos
        return $resultados;
    }
}


