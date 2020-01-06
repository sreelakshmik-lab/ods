<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designerprofile extends Model
{
    
    protected $table = 'profiledesigner';
    protected $fillable = ['fk_loginid','designerid','edu_quali','work_exp'];
}
