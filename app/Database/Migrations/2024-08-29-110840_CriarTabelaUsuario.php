<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriarTabelaUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
            ],
            'password_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '220',
            ],
            'reset_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '80',
                'null' => true,
                'defalt' => null,
            ],
            'reset_expira_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'defalt' => null,
            ],
            'imagem' => [
                'type'       => 'VARCHAR',
                'constraint' => '240',
                'null' => true,
                'defalt' => null,
            ],
            'ativo' => [
                'type'       => 'BOOLEAN',
                'null' => false,
             ],

             'criado_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'defalt' => null,
            ],

            'atualizado_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'defalt' => null,
            ],

            'deletado_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'defalt' => null,
            ],

        ]);

       $this->forge->addKey('id', true);       
       $this->forge->addUniqueKey('email');
       $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
