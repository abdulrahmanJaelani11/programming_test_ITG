<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id_staff';
    protected $allowedFields = ['nama', 'kota', 'id_devisi', 'alamat'];
}
