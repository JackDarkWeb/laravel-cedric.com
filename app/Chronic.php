<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chronic extends Model
{
    protected $table = 'chronics';

    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];
}
