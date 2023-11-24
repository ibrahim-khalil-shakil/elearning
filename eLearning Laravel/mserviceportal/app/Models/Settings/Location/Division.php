<?php

namespace App\Models\Settings\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasFactory,SoftDeletes;
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
