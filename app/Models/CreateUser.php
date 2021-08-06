<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createUser extends Model
{
  protected $table = 'create_users';

  protected $fillable = [
    'id',
    'name',
    'email',
    'role',
    'password',
];
}
