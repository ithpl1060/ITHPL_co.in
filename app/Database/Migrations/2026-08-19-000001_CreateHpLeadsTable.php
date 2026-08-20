<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHpLeadsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'full_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'mobile_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'business_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'company_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'designation' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'       => true,
            ],
            'consent_processing' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
            ],
            'consent_marketing' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
            ],
            'source_page' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'default'    => 'hpaipcs',
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null'       => true,
            ],
            'user_agent' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('business_email');
        $this->forge->addKey('created_at');
        $this->forge->createTable('hp_leads', true);
    }

    public function down()
    {
        $this->forge->dropTable('hp_leads', true);
    }
}
