<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\MukhtaarAziz\MyApplication;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $languageCookie = $request->cookie('language',MyApplication::DEFAULT_LANGUAGE);
        if(!$languageCookie || !in_array($languageCookie,MyApplication::SUPPORTED_LAGNUAGES)){
            Cookie::queue('language',MyApplication::DEFAULT_LANGUAGE,3600);
            App::setlocale(MyApplication::DEFAULT_LANGUAGE);
        }else{
            App::setlocale($languageCookie);
        }
        return $next($request);
    }
}
