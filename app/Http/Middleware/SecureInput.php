<?php

namespace App\Http\Middleware;

use Closure;

class SecureInput
{
    public function handle($request, Closure $next)
    {
        $input = $request->all();

        foreach ($input as $key => $value) {
            $request[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }

        return $next($request);
    }
}

