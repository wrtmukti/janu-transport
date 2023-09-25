<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'vehicle_id'
    ];
    public function Vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
