<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'feed_back_id';
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email', 'comments'];

}
