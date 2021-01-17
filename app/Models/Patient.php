<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'PreferredPhone_id',
    ];

    public function telephonePatient() {
        return $this->belongsTo(related: TelephonePatient::class);
    }
}
