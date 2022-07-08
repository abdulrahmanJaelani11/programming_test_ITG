<?php

namespace App\Controllers;

use App\Models\DevisiModel;
use App\Models\StaffModel;

class Home extends BaseController
{
	protected $StaffModel;
	protected $DevisiModel;
	public function __construct()
	{
		$this->StaffModel = new StaffModel();
		$this->DevisiModel = new DevisiModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Index',
			'devisi' => $this->DevisiModel->findAll()
		];
		return view('index', $data);
	}

	public function getTable()
	{
		$data = [
			'staff' => $this->StaffModel->db->table('staff')->join('devisi', 'staff.id_devisi=devisi.id')->get()->getResultArray()
		];
		echo json_encode(view('table/table', $data));
	}
}
