<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioauditoria
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
        if($usuario_actual->tipoUsuario!=2){
            return view("mensajes.msj_rechazado")->with("msj","Usuario rechazado, Ud no es un administrador del Departamento de Auditoria");
        }
        return $next($request);
    }
}
