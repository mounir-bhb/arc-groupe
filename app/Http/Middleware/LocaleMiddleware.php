<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    /* public function handle($request, Closure $next)
    {
        $locale = $request->getPreferredLanguage(config('app.locales'));
        App::setLocale($locale);
        return $next($request);
    } */
    public function handle($request, Closure $next)
    {
        
        $locale = $this->getLocaleFromRequest($request);
        /* $locales = config('app.locales'); */
        $segment = $request->segment(1);
        if($segment!= $locale){
            $segments = $request->segments();
            array_unshift($segments, $locale);
            App::setLocale($locale);
            $redirectUrl = implode('/', $segments);
            /* dd($redirectUrl); */
            return redirect($redirectUrl);

        }
        App::setLocale($locale);
        $request->session()->put('locale', $locale);
        /* dd($local); */
        return $next($request);
    }

    protected function getLocaleFromRequest($request)
    {
        $locales = config('app.locales');
        $segment = $request->segment(1);
        /* dd($segment); */
        if (in_array($segment, $locales)) {
            
            return $segment;
        }
        
        $preferredLanguages = $request->getLanguages() ?: [];
        foreach ($preferredLanguages as $language) {
            $language = str_replace('_', '-', strtolower($language));
            if (in_array($language, $locales)) {
                
                return $language;
            }
        }
        
        /* return $locales[0]; */
        return reset($locales);
    }
}


/* $locale = $request->segment(1);

        if (!in_array($locale, ['en', 'fr'])) {
            $preferredLanguage = $this->getPreferredLanguage($request);

            if ($preferredLanguage && in_array($preferredLanguage, ['en', 'fr'])) {
                $locale = $preferredLanguage;
                $segments = $request->segments();
                array_unshift($segments, $locale);
                $redirectUrl = implode('/', $segments);
                return redirect($redirectUrl);
            }
        }

        App::setLocale($locale);

        return $next($request);
 */

 /* protected function getPreferredLanguage($request)
    {
        $preferredLanguages = $request->getLanguages();
        $locales = ['en', 'fr'];

        foreach ($preferredLanguages as $language) {
            $language = str_replace('_', '-', strtolower($language));
            if (in_array($language, $locales)) {
                return $language;
            }
        }

        return null;
    } */