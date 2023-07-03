<?php

namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecuriteTranslation extends Model
{
    use HasFactory;

    protected $fillable= [
        'local',
        'type_rails',
        'normes_directive'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(session('locale', config('app.locale'))){
            $this->table = 'securite_translations_' . session('locale', config('app.locale'));
        }
    }
}
