<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class RoleStudentAccess {

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
            if(Auth::user()->role_id == 1 || Session::has('studentId')){
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
