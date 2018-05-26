<?php

namespace acclinic\Http\Middleware;

use Closure;
use Auth;
class AtendenteMiddleware
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
        
         if (Auth::check() && Auth::user()->role == 'paciente') {
              return redirect('/areaCliente');   
        }elseif(Auth::check() && Auth::user()->role == 'medico'){
            return redirect('/areaMedico');
        }elseif (Auth::check() && Auth::user()->role == 'atendente') {
            return $next($request);    
        }else{
        return $next($request);
        }
    
    }
}
