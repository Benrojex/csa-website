<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class AppRegistrationGuard
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
        $user= User::where('email',$request->email)->first();
        if(!$user && !$request->code) abort(403,"Access denied");
        return $next($request);
    }
}
