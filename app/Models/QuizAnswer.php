<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'question_id', 'selected_option', 'is_correct'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
