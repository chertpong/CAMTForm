<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::check() || Session::has('studentId') ){
            if(Session::has('studentId')){
                return $next($request);
            }
            else{
                abort(403, 'Forbidden');

            }
        }
        abort(401, 'Unauthorized');
	}

}
