<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Se l'utente è autenticato e il suo ruolo corrisponde a quello richiesto procedo con la REQUEST
        if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        }

        // Reindirizza se l'utente non ha il ruolo richiesto
        return redirect('/');
    }
}
