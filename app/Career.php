<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
    	'date_start',
    	'date_end',
    	'career_description',
    ];
}
