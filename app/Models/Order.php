<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'whatsapp',
        'total_price',
        'status',
        'type',
        'date',
        'time',
        'tour_id',
    ];
    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class)->withPivot('package_id');
    }
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
