<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLoginLog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'userid' => [
                'type' => 'BIGINT',
            ],
            'login_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'logout_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('login_log');
    }

    public function down()
    {
        //
    }
}
