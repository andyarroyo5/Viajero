<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //public $table = 'places';
    public $fillable = ['name','country','continent', 'location','picture'];
}
