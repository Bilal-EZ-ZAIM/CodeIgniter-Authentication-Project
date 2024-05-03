<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $returnType    = \App\Entities\User::class;
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'email', 'password'];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
