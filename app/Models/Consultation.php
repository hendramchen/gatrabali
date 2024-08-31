<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = ['problem', 'phone', 'user_id', 'consult_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
