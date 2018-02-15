<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    //
    protected $table = 'apartments';
    protected $fillable = ['apartment_name','apartment_address','no_of_rooms'];
    protected $hidden = [];
}
