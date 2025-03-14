<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'about',
        'thumbnail',
        'tagline',
        'name',
    ];

    public function appointment()
    {
        return $this->hasMany(appointment::class);
    }
}
