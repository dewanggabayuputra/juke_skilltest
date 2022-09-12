<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = "biodata";

    protected $fillable = [
        'user_id',
        'applied_position',
        'name',
        'ktp',
        'birth_place',
        'birth_date',
        'gender',
        'religion',
        'blood_type',
        'marital_status',
        'ktp_address',
        'address',
        'email',
        'phone_number',
        'nearest_people',
        'skills',
        'is_willing_travel',
        'expected_salary'
    ];
}
