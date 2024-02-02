<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first-name',
        'last-name',
        'gender',
        'form',
        'admission-number',
        'home-county',
        'date-of-birth'
    ];

}
