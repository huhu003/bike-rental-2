<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
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
        
        if(auth()->user()->role == 'admin'){
			return $next($request);
		}else{
			return redirect('admin.dashboard');
		}
		if(auth()->user()->role == 'user'){
			return $next($request);
		}else{
			return redirect('user.home');
		}
	}
  
}
