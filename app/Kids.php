<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kids extends Model
{
    //
    protected $fillable = [
        'lname', 'fname', 'gender', 'age'
    ];
}
