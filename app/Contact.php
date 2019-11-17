<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    public $timestamps = true;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'message'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
