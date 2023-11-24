<?php

namespace App\Models\Settings\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;
    public function district(){
        return $this->belongsTo(District::class);
    }
}
