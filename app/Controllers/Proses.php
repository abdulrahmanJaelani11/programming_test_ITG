<?php

namespace App\Controllers;

use App\Models\DevisiModel;
use App\Models\StaffModel;

class Proses extends BaseController
{
    protected $StaffModel;
    protected $DevisiModel;
    protected $validasi;
    public function __construct()
    {
        $this->StaffModel = new StaffModel();
        $this->DevisiModel = new DevisiModel();
        $this->validasi = \Config\Services::validation();
    }

    public function pesanSukses($pesan)
    {
        $pesan = [
            'status' => 200,
            'pesan' => $pesan
        ];

        echo json_encode($pesan);
    }

    public function getStaff($id)
    {
        $staff = $this->StaffModel->find($id);

        echo json_encode($staff);
    }

    public function prosesHapusStaff($id)
    {

        $this->StaffModel->delete($id);
        return $this->pesanSukses('Berhasil Menghapus Staff');
    }

    public function prosesSimpanStaff()
    {
        $data = $this->request->getVar();
        // echo json_encode($data);
        // die;

        if (!$this->validate([
            'nama' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Maaf Nama Harus Diisi"
                ]
            ],
            'kota' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Maaf Kota Harus Diisi"
                ]
            ],
            'devisi' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Maaf Devisi Harus Diisi"
                ]
            ],
            'alamat' => [
                'rules' => "required",
                'errors' => [
                    'required' => "Maaf Alamat Harus Diisi"
                ]
            ],
        ])) {
            $pesan = [
                'status' => 500,
                'pesan' => [
                    'nama' => $this->validasi->getError('nama'),
                    'kota' => $this->validasi->getError('kota'),
                    'devisi' => $this->validasi->getError('devisi'),
                    'alamat' => $this->validasi->getError('alamat'),
                ]
            ];
            echo json_encode($pesan);
        } else {
            if ($data['id'] == '') {
                $this->StaffModel->save([
                    'nama' => htmlspecialchars($data['nama']),
                    'kota' => htmlspecialchars($data['kota']),
                    'id_devisi' => $data['devisi'],
                    'alamat' => htmlspecialchars($data['alamat']),
                ]);

                $this->pesanSukses('Berhasil Menambahkan Staff');
            } else {
                $this->StaffModel->update($data['id'], [
                    'nama' => htmlspecialchars($data['nama']),
                    'kota' => htmlspecialchars($data['kota']),
                    'id_devisi' => $data['devisi'],
                    'alamat' => htmlspecialchars($data['alamat']),
                ]);

                $this->pesanSukses('Berhasil Mengubah Staff');
            }
        }
    }

    public function cariDevisi($id)
    {
        $data = [
            'staff' => $this->StaffModel->db->table('staff')->join('devisi', 'staff.id_devisi=devisi.id')->getWhere(['id_devisi' => $id])->getResultArray()
        ];

        echo json_encode(view('table/table', $data));
    }
}
