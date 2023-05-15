<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $table = 'beneficiary';
    protected $primaryKey = 'beneficiary_id';
    protected $fillable = ['first_name ','last_name ','CNIC','phone_number',
                            'email ','address','job', 'company',  'city',  'salary'];

}
