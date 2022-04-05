<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'routes';

    protected $fillable = [
        'name',
        'image',
        'altitude',
        'distance',
        'elevationgain',
        'time',
        'difficulty',
        'location',
        'description',
    ];


    public function users(){
        return $this->belongsToMany(User::class);
      }
      
}

