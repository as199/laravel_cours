<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'address', 'zip'];


    public static function giveMeAll()
    {
        return self::all();
    }

}
