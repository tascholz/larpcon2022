<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orga extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    public function events() 
    {
        return $this->hasMany(Event::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
