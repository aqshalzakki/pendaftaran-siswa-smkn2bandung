<?php

namespace App\Http\Middleware;

use Closure;

class UserLoggedIn
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
        if (!session()->has(['id', 'nisn'])){
            return redirect('login.nisn')->withUnauthorized('Anda harus melakukan login terlebih dahulu!');
        }
        return $next($request);
    }
}
