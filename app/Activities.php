<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
   	protected $fillable = ['title','full_content','cover_image'];
}
