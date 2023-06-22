<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestions extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function activity()
    {
        return $this->belongsTo(QuizActivities::class);
    }
}
