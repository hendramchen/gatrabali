<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'question_status', 'user_id'];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
