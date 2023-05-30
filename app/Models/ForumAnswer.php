<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumAnswer extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function question()
    {
        return $this->belongsTo(ForumPost::class);
    }
}
