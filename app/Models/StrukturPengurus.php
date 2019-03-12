<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturPengurus extends Model
{
    protected $table = 'struktur_pengurus';
    protected $guarded = ['created_at', 'updated_at'];
}
