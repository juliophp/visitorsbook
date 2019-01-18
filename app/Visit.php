<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //


    protected $fillable = [
        'id', 'firstname', 'lastname', 'purpose', 'timein',
        'timeout'
    ];
}
