<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //public $table = 'trips';
    public $fillable = ['name','description','budget', 'start_date','end_date','updated_at'];
}
