<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_name';
    protected $fillable = ['user_name', 'password', 'role'];

}
