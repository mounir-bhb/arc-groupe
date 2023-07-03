<?php

namespace App\Models\Dugusan;

use App\Traits\MultiLanguageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;
    use MultiLanguageTrait;

    protected $fillable=['name','main_image'];
}
