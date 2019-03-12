<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "team_advokasi";
    protected $guarded = ['created_at', 'updated_at'];
}
