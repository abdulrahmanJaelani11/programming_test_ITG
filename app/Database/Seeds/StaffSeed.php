<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StaffSeed extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama' => 'Abdurahman Jaelani',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Cikenceh 2/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Agung Wira',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Nangka Bongkok/ Desa Cihuni/ Kec. Kadungora'
			],
			[
				'nama' => 'Yoga Nugraha',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Cihaur/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Rahmayanti',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Haurkuning/ Kec. Kadungora'
			],
			[
				'nama' => 'Siti Setiawati',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Cikenceh 1/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Ridwan Maulana',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Haruman/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Andi Permana',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Patrol/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Adityan Budiman',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Haruman/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Putri Aini Azzahra',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Haruman/ Desa Harumansari/ Kec. Kadungora'
			],
			[
				'nama' => 'Fahmi Budiansyah',
				'kota' => 'Garut',
				'id_devisi' => mt_rand(1, 6),
				'alamat' => 'Kp. Cikenceh 2/ Desa Harumansari/ Kec. Kadungora'
			],
		];

		$this->db->table('staff')->insertBatch($data);
	}
}
