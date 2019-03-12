<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages_anggota extends Model
{
    protected $table = 'message_anggota';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
