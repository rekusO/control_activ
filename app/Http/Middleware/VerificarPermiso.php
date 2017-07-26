<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class VerificarPermiso
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
        if(Auth::user()->tipo_usuario=='supervisor' or Auth::user()->tipo_usuario=='administrador')
        {
            return $next($request);
        }
        return Redirect(route('inicio'));
    }
}
