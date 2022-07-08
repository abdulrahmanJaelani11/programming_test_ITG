<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staff extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_staff' => [
				'type' => 'INT',
				'auto_increment' => true
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'kota' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'id_devisi' => [
				'type' => 'INT',
				'constraint' => 20
			],
			'alamat' => [
				'type' => 'TEXT',
			],
		]);

		$this->forge->addKey('id_staff');
		$this->forge->createTable('staff');
	}

	public function down()
	{
		$this->forge->dropTable('staff');
	}
}
