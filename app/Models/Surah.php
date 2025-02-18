<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;

    // تحديد الحقول القابلة للملء
    protected $fillable = ['name'];
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function results()
{
    return $this->hasMany(Result::class);
}
}
