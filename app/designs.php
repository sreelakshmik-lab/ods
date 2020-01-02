<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designs extends Model
{
    protected $table = 'designs';
    protected $fillable = ['fk_designerid','design_type','designs',];
}
