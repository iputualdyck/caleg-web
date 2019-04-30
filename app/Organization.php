<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
    	'date_start',
    	'date_end',
    	'organization_description',
    ];
}
