<?php

namespace acclinic\Http\Middleware;
use Closure;
use Auth;
class MedicoMiddleware
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
              return $next($request);    
        }elseif (Auth::check() && Auth::user()->role == 'atendente') {
              return redirect('/areaAtendente');
        }else{
        return $next($request);
        }
    }
}
