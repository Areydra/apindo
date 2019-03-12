<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password','role','gambar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if($this->role === 'admin'){
            return true;
        }else{
            return false;
        }
    }

    public function isUser()
    {
        if ($this->role === 'user') {
            return true;
        } else {
            return false;
        }
    }

    public function messages_anggota()
    {
        return $this->hasMany(App\Models\Messages_anggota::class);
    }

    public function messages_pengurus()
    {
        return $this->hasMany(App\Models\messages_pengurus::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
