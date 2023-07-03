<?php

namespace App\Models\Dugusan;

use App\Traits\MultiLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porte extends Model
{
    use HasFactory;
    use MultiLanguageTrait;

    public function images(){
        return $this->hasMany(Image::class);
        /* return $this->hasMany(Images::class); */
    }
}
