<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelephonePhysician extends Model
{
    use HasFactory;

    protected $fillable = [
        'areacode',
        'number',
        'phisician_id',
    ];

    public function phisician() {
        return $this->belongsTo(related: Phisician::class);
    }
}
