<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id', 'id');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function material()
    {
        return $this->hasMany(Material::class);
    }
}
