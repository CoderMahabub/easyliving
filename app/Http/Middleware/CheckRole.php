<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role_id == 2){
            return redirect('/404');
        }
        elseif(Auth::user()->role_id == 1){
            return redirect('/admin/dashboard');
        }
        elseif(Auth::user()->role_id == 2){
            return redirect('/404');
        }
            
        
        return $next($request);
    }
}
