<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mine
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->url()===route('admins.index') && !auth()->check() && !auth('admin')->check()){
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
