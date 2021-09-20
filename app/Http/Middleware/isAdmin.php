<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
// checkin if user is admin or moderator
        $isadmin= Auth::user()->role_id;
        if($isadmin == 3)
        { return redirect()->route('home') ;} 

        return $next($request);
    }
}
