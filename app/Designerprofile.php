<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designerprofile extends Model
{
    
    protected $table = 'profiledesigner';
    protected $fillable = ['designerid','edu_quali','work_exp'];
}
