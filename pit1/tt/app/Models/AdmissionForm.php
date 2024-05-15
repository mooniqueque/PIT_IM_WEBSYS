<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birth_month',
        'birth_day',
        'birth_year',
        'gender',
        'nationality',
        'contactno',
        'street_address',
        'city',
        'province',
        'zipcode',
        'emergency_name',
        'relationship',
        'emergency_contact_number',
        'school_last_attended',
    ];
}
