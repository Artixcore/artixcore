<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class WAFMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Define a list of patterns to block
        $patterns = [
            '/<script.*?>.*?<\/script>/is', // XSS attacks
            '/SELECT.*?FROM.*?/i',          // SQL Injection
            '/UNION.*?SELECT.*?/i',         // SQL Injection
            '/UPDATE.*?SET.*?/i',           // SQL Injection
            '/DELETE.*?FROM.*?/i',          // SQL Injection
            '/INSERT.*?INTO.*?/i',          // SQL Injection
            '/DROP.*?TABLE.*?/i',           // SQL Injection
            '/<iframe.*?>.*?<\/iframe>/is', // XSS attacks
            '/<.*?javascript:.*?>/is',      // XSS attacks
        ];

        $input = $request->all();

        foreach ($input as $key => $value) {
            foreach ($patterns as $pattern) {
                if (is_string($value) && preg_match($pattern, $value)) {
                    // Log the attempt
                    Log::warning('Blocked request: ', ['request' => $request->all()]);

                    // Optionally, return a response to block the request
                    return response('Your request has been blocked for security reasons.', 403);
                }
            }
        }

        return $next($request);
    }
}
