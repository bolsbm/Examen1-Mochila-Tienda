<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
       protected $table = 'categoria';

    protected $fillable =['nombre', 'marcaid','precio'];
}

