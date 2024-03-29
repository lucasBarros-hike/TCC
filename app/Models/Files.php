<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
