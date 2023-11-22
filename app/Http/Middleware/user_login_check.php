<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user_login_check
{
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('Login_user'))
        {
            return $next($request);         
        }

        return redirect('/');
    }
}
