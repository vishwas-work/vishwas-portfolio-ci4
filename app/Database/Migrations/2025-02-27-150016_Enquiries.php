<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Enquiries extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'message' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],

        ]);
        $this->forge->addKey('id', true);

        $this->forge->createTable('enquiries');
    }

    public function down()
    {

        $this->forge->dropTable('enquiries');
    }
}
