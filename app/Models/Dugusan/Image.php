<?php

namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    public function porte()
    {
        return $this->belongsTo(Porte::class);
    }
    /* public function porte()
    {
        return $this->belongsTo(Porte::class);
    } */
}
