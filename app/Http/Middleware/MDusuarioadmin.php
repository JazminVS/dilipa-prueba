<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioadmin
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
        $usuario_actual=\Auth::users;
        if($usuario_actual->tipoUsuario!=1){
            return view("mensajes.msj_rechazado")->with("msj","Usuario rechazado");
        }
        return $next($request);
    }
}
