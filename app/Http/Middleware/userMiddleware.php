<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class userMiddleware
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
        $user = $request->user();
        if($user->isUser()){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
