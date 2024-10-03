<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateInput
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $input = $request->all();
    
        // Sanitize input to prevent XSS and SQL Injection
        foreach ($input as $key => $value) {
            $input[$key] = strip_tags($value);
        }
    
        $request->merge($input);
        return $next($request);
    }
    
}
