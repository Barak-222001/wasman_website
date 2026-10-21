<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureWasmanAdmin
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        if (
            ! $request->user() ||
            ! $request->user()->is_admin
        ) {
            abort(403, 'Unauthorized access. Administrators only.');
        }

        return $next($request);
    }
}
