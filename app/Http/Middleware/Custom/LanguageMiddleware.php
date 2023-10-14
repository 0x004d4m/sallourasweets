<?php

namespace App\Http\Middleware\Custom;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
        if(!Session::has('locale')) {
            Session::put('locale', 'ar');
            App::setLocale('ar');
        }else{
            App::setLocale(Session::get('locale'));
        }
        config(['backpack.ui.html_direction' => Session::get('locale')=='ar'?'rtl':'ltr']);
        return $next($request);
    }
}
