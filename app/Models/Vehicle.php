<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'category',
        'status',
        'order_id',
    ];
    public function packages()
    {
        return $this->hasMany(Package::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('package_id');
    }
}
