<?php

namespace App\Models\Dugusan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/* use Jenssegers\Mongodb\Eloquent\Model; */
use Illuminate\Database\Eloquent\Model;
use App\Traits\MultiLanguageTrait;

class Cabine extends Model
{
    use HasFactory;
    use MultiLanguageTrait;

    /* protected $table = ''; */

    /* protected $guarded = []; */

    /* protected $fillable=['multiLanguageFields'];

    protected $multiLanguageFields = 
    [
        'back_wall',
        'ceiling',
        'floor',
        'accessories',
        'handrail',
        'side_walls',
    ]; */


    /* public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = 'cabines_' . session('locale', config('app.locale'));
    } */
    /* public function __construct($attributes = array())
    {
        parent::__construct($attributes);
        $this->collection = $this->getCollectionName();
    }

    public function getCollectionName()
    {
        return $this->collection . '_' . App::getLocale();
    } */

    
}



/* 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabine extends Model
{
    protected $guarded = [];

    protected $casts = [
        'name' => 'json',
        'description' => 'json',
    ];

    public function getNameAttribute()
    {
        return $this->getAttributeValue('name.' . app()->getLocale());
    }

    public function getDescriptionAttribute()
    {
        return $this->getAttributeValue('description.' . app()->getLocale());
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = json_encode(array_merge($this->getTranslations('name'), [
            app()->getLocale() => $value,
        ]));
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = json_encode(array_merge($this->getTranslations('description'), [
            app()->getLocale() => $value,
        ]));
    }

    protected function getTranslations($fieldName)
    {
        return json_decode($this->attributes[$fieldName] ?? '{}', true);
    }
}

*/