<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
//busca en la pivot el id del usuario vinculado a la pivot
    public function users(){
        return $this->belongsToMany(User::class);
    }
}

