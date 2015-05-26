<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RoleModAccess {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        // Admin level = 1
        // Mod level = 2
        // User level = 3
        if(Auth::check()){
            if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
                return $next($request);
            }
            else{
                Log::info(Auth::user()->id . 'is trying to access mod level route');
                abort(403, 'Forbidden');

            }
        }
        abort(401, 'Unauthorized');
	}

}
