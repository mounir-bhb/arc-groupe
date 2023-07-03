<?php

namespace App\Models\Dugusan;

use App\Models\Paragraphe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentationTranslation extends Model
{
    use HasFactory;

    protected $fillable=[
        'local',
        'description'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(session('locale', config('app.locale'))){
            $this->table = 'presentation_translations_' . session('locale', config('app.locale'));
        }
    }

    public function paragraphes(){
        return $this->hasMany(Paragraphe::class);
    }
}
