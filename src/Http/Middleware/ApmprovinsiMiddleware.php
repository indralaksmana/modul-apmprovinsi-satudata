<?php namespace Satudata\Apmprovinsi\Http\Middleware;

use Closure;

/**
 * The ApmprovinsiMiddleware class.
 *
 * @package Satudata\Apmprovinsi
 * @author  MKI <info@mkitech.net>
 */
class ApmprovinsiMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
