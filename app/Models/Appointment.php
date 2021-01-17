<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'end',
        'patient_id',
        'phisician_id',
    ];

    public function patient() {
        return$this->belongsTo(related: Patient::class);
    }

    public function phisician() {
        return $this->belongsTo(related: Phisician::class);
    }
}
