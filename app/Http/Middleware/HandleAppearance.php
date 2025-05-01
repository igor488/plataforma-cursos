<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class HandleAppearance
{
    /**
     * Compartilha o tema (claro/escuro/sistema) com todas as views.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Compartilha a aparência com as views
        View::share('appearance', $request->cookie('appearance', 'system'));

        return $next($request);
    }
}
