<?php

namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulateurTranslation extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(session('locale', config('app.locale'))){
            $this->table = 'regulateur_translations_' . session('locale', config('app.locale'));
        }
    }
}
