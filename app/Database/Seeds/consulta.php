<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class consulta extends Seeder
{
    public function run()
    {
        $data = [
            'reg_nombre' => 'Pedro',
            'reg_apellido'    => 'Vite',
            'reg_usuario' => 'pvite',
            'reg_contraseña' => '7326',
        ];
        // Using Query Builder
        $this->db->table('tbl_registrousu')->insert($data);
    }
}