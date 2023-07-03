<?php

namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PorteTranslation extends Model
{
    use HasFactory;

    protected $fillable=[
        'porte_id',
        'name',
        'description'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(session('locale', config('app.locale'))){
            $this->table = 'porte_translations_' . session('locale', config('app.locale'));
        }
    }
}
