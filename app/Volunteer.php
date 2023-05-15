<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = 'volunteer';
    protected $primaryKey = 'volunteer_id';
    protected $fillable = ['first_name ','last_name ','CNIC','phone_number',
                            'email ','address','job', 'company',  'city',  'availability'];

}
