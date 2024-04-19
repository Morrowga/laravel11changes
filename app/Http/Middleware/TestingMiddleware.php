<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Exceptions\TestingException;
use Symfony\Component\HttpFoundation\Response;

class TestingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->query('pass') == 'false' || !$request->has('pass'))
        {
            throw new TestingException();
        }

        return $next($request);
    }
}
