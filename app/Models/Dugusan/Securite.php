<?php

namespace App\Models\Dugusan;

use App\Traits\MultiLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Securite extends Model
{
    use HasFactory;
    use MultiLanguageTrait;

    protected $fillable=[
        'main_image',
        'name',
        'pq',
        'vnominale',
    ];
}
