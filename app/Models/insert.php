<?php

namespace App\Models;

use CodeIgniter\Model;

class insert extends Model
{
    public function insertregistro($datosinsert)
    {
        try {
            $tabla = $this->db->table('tbl_registrousu');
            $tabla->insert($datosinsert);
            $this->db->insertID();
            return TRUE;
        } catch (\Throwable $th) {
            return FALSE;
        }
    }
}