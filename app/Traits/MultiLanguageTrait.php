<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\CabineTranslation;
use Illuminate\Support\Facades\App;

trait MultiLanguageTrait
{
    /* public function newQuery($excludeDeleted = true)
    {
        $query = parent::newQuery($excludeDeleted);
        $query->macro('localized', function (Builder $builder) {
            $builder->where('locale', session('locale', config('app.locale')));
            return $builder;
        });

        return $query;
    } */

    public function __get($key)
    {
        //$value = parent::__get($key);
        //if (in_array($key, $this->multiLanguageFields) && $this->translations()->where('locale', App::getLocale())->count()) {
        //    return $this->translations()->where('locale', App::getLocale())->first()->{$key} ?: $value;
        //}
        $value = parent::__get($key);
        if ( $this->translations()->where('locale', session('locale', config('app.locale')))->count()) {
            return $this->translations()->where('locale', session('locale', config('app.locale')))->first()->{$key} ?: $value;
        }
        return $value;
    }
   
    

    

    public function translations()
    {
        return $this->hasMany(static::class . 'Translation');
    }
    

}
