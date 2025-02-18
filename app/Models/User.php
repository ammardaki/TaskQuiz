<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role'];


    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }
    public function results()
{
    return $this->hasMany(Result::class);
}
}
