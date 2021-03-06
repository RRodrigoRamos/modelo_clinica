<?php

namespace acclinic\Http\Middleware;

use Closure;
use Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::check() && Auth::user()->role == 'paciente') {
            return $next($request);    
        }elseif(Auth::check() && Auth::user()->role == 'medico'){
            return redirect('/areaMedico');
            
        }elseif (Auth::check() && Auth::user()->role == 'atendente') {
            return redirect('/areaAtendente');
        }else{
        return $next($request);
        }

    }
}
