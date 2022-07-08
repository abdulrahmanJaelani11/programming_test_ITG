<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DevisiSeed extends Seeder
{
	public function run()
	{
		$data = [
			[
				'devisi' => 'Produksi'
			],
			[
				'devisi' => 'Accounting'
			],
			[
				'devisi' => 'Programmer'
			],
			[
				'devisi' => 'Project Manager'
			],
			[
				'devisi' => 'Web Designer'
			],
			[
				'devisi' => 'Web Developer'
			],
		];

		$this->db->table('devisi')->insertBatch($data);
	}
}
