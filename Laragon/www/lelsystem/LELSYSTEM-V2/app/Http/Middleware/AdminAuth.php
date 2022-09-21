<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class AdminAuth
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

       switch(auth::user()->rol){
           case('Administrador'):
               return $next($request);
                break;
            case('Docente'):
                return redirect('docente.docente');
                break;
            case('Estudiante'):
                return redirect('estudiante.estudiante');
                break;
            default:
             return redirect('login');
       }

    }
}
