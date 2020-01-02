<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userReg extends Model
{
    protected $table = 'userreg';
    protected $fillable = ['firstname','lastname','gender','phone','email','password','address','status',
    						'user_type'];
}
 