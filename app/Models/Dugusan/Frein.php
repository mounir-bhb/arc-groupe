<?php

namespace App\Models\Dugusan;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frein extends Model
{
    use HasFactory;

    protected $fillable= [
        'main_image',
        'name',
        'pq',
        'vnominale'
    ];
}
