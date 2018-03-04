<?php

namespace App\Http\Middleware;

use Closure;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->route()->parameters()['lang'] == "en" || $request->route()->parameters()['lang'] == "az" || $request->route()->parameters()['lang'] == "ru"){
            return $next($request);            
        }        
        return redirect('/az');
    }
}
