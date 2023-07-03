<?php

namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levage extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'max_vitesse',
        'max_charge',
        'min_charge',
        'main_image',
    ];

}
