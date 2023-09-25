<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'facility',
        'category',
        'type',
        'status',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
