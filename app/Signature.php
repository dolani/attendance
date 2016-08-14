<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = [
        'title', 'first_name','last_name','subject'
    ];
}
