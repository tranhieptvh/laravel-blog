<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        if ($request->path() !== 'login') {
            if (!$request->token) {
                //Todo something
                //Kiem tra token co hop le khong?
                return redirect('login');
            }
        }
        return $next($request);
    }
}
