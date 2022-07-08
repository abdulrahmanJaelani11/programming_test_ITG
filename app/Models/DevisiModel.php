<?php

namespace App\Models;

use CodeIgniter\Model;

class DevisiModel extends Model
{
    protected $table = 'devisi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['devisi'];
}
