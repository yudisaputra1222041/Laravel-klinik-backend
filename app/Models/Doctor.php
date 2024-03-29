<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'doctor_name',
        'doctor_category',
        'doctor_phone',
        'doctor_email',
        'sip',
        'description',
        'id_ihs',
        'nik',
    ];
}
