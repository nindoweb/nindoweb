<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProtectAgainstSpam
{

    public function handle(Request $request, Closure $next)
    {
        if(!$request->has('honeypot') || $request->get('honeypot') != null) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
