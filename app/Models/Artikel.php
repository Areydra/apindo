<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";
    protected $guarded = ['created_at', 'updated_at'];
}
