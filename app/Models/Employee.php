<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'gender',
        'birth_year',
        'education',
        'specialty',
        'registration_date',
        'creator_user_id'
    ];
}
