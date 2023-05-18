<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NGO extends Model
{
    protected $table = 'ngo';
    protected $primaryKey = 'ngo_id';
    protected $fillable = ['name ','contact',
                            'email','address','city', 'image', 'description'];
}
