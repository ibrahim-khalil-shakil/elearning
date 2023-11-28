<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function option(){
        return $this->hasMany(Option::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
