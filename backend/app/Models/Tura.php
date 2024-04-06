<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tura extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'tipus_id',
        'idopont',
        'turavezeto',
        'ar',
        'min_letszam',
        'max_letszam',
        'statusz'
    ];
}
