<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $table = 'surveys'; 
    protected $primaryKey = 'user_id';
}
