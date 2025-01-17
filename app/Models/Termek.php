<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termek extends Model
{
    /** @use HasFactory<\Database\Factories\TermekFactory> */
    use HasFactory;

    protected $fillable=[
        'iro',
        'cime',
        'leiras',
        'ar'
    ];
}
