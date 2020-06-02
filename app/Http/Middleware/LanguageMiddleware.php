<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class LanguageMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        // Available language mutations
       $mutationLang = array("sk", "de", "hu", "nl", "pl", "uk", "cz");
        // extract client language
       $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);

            // If session appLocal exist
        if (Session::has('appLocale')) $lang = Session::get('appLocale');
            // if not check client browser lang
        elseif( in_array( $lang, $mutationLang) );

        // if not set default 'en' language
        else( $lang = Config::get('app.fallback_locale') );
//        else $lang = Config::get('app.fallback_locale');

        App::setLocale($lang);

        return $next($request);
    }
}
