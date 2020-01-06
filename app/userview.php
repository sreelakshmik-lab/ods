<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userview extends Model
{
    protected $table = 'userview';
    protected $fillable = ['des_fk','Rate','Details'];
}
