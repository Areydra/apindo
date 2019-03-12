<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeksBerjalan extends Model
{
    protected $table = 'teks_berjalan';
    protected $guarded = ['created_at', 'updated_at'];
}
