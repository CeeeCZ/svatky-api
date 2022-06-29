<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;

class LogApiRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $referrer = $request->server->get('HTTP_REFERER');
            $logUrl = $request->route() instanceof Route ? $request->route()->uri() : $request->route();
            $logReferrer = $referrer !== null && !is_array($referrer) ? $referrer : 'unknown';

            Log::channel('routeMonitor')->info(
                'URL: ' . $logUrl .
                ' | from: ' . $logReferrer .
                    ' | IP: ' . $request->ip());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return $next($request);
    }
}
