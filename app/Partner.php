<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partner';
    protected $fillable =
     ['id','nama_partner'];

}
