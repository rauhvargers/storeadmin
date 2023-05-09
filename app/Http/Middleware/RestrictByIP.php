<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictByIP
{

    /**
     * Handle an incoming request. If the request is not from a whitelisted IP or subnet, return a 403 response
     *  @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedIPs = ['127.0.0.1'];
        if (in_array($request->ip(), $allowedIPs)) {
            return $next($request);
        }
        return response('Unauthorized', 403);
    }
}
