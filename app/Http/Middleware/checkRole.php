<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; //custom
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session; //custom

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Session::has('userId') || Session::has('userId') == null) {
            return redirect()->route('logOut');
        } else {
            $user = User::findorFail(currentUserId());
            if (!$user) {
                return redirecty()->route('logOut');
            } else if ($user->full_access == "1") {
                return $next($request);
            } else {
                return $next($request);
            }
        }
        return redirect()->route('logOut');
    }
}
