<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelephonePatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'areacode',
        'number',
        'patient_id',
    ];

    public function patient() {
        return$this->belongsTo(related: Patient::class);
    }
}
