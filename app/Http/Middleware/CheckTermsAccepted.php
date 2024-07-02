<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTermsAccepted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y si no ha aceptado los términos y condiciones
        if (auth()->check() && !auth()->user()->accepted_terms) {
            // Redirige al usuario a la página de términos y condiciones
            return redirect()->route('terms');
        }

        // Permite la solicitud continuar si el usuario ha aceptado los términos y condiciones
        return $next($request);
    }
    
}
