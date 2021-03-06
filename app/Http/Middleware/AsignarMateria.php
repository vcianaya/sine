<?php

namespace App\Http\Middleware;

use Closure;
use Entrust;
use Session;

class AsignarMateria
{
    public function handle($request, Closure $next)
    {
        if (!Entrust::can('asignarMateria') )
        {
            Session:: flash('danger_message','Usted no cuenta con los permisos requeridos contactese con el administrador del sistema');
            return back();
        }
        return $next($request);
    }
}
