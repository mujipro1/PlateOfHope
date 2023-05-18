<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donation';
    protected $primaryKey = 'donation_id';
    protected $fillable = ['ngo_id', 'address', 'city', 'no_of_volunteers', 'date', 'day'];
}
