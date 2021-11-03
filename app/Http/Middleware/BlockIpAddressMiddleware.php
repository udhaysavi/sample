<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockIpAddressMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public $blacklistIps = [
        '192.168.50.60', 
        '192.168.50.70'
    ];

    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->getClientIp(), $this->blacklistIps)) {
            abort(403, "You are restricted to access the site.");
        }
                
        return $next($request);
    }
}
