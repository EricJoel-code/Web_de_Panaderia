<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migracion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'reg_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'reg_nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'reg_apellido' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'reg_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'reg_contraseña' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('reg_id', true);
        $this->forge->createTable('tbl_registrousu');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_registrousu');
    }
}
