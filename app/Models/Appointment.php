<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'meeting_at',
        'budget',
        'brief',
        'product_id',
    ];

    protected $casts = [
        'meeting_at' => 'date',
    ];

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
