<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TheUserIsAnEmployee
{

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if($user->is_staff) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }
}
