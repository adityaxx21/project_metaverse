<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // baru

class login_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,  $roles)
    {
        if (!Auth::check()) {
            return redirect('/auth');
        }
        $user = Auth::user();

        if($user->level == $roles)
            return $next($request);


        return redirect('/auth')->with('error',"kamu gak punya akses");
    }
}
