<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'Personas';

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'dateofbirth',
        'sex',
        'phone',
        'avatar',
        'password'
    ];
}
