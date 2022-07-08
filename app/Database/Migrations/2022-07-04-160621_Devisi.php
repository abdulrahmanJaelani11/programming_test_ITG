<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Devisi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => true
			],
			'devisi' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			]
		]);

		$this->forge->addKey('id');
		$this->forge->createTable('devisi');
	}

	public function down()
	{
		$this->forge->dropTable('devisi');
	}
}
