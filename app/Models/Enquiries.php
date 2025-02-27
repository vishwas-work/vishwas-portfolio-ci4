<?php

namespace App\Models;

use CodeIgniter\Model;

class Enquiries extends Model
{
    protected $table = 'enquiries';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $createdField  = 'created_at';

    protected $allowedFields = ['name', 'email',  'message'];
}
