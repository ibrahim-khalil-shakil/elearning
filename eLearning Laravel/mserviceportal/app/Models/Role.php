<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /*
    * relation with user
    */
    public function users(){
        return $this->hasMany(User::class);
    }
    // public function permission(){
    //     return $this->belongsToMany(Permission::class,'role_permission');
    // }
}
