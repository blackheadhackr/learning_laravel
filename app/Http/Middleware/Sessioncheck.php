<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Sessioncheck
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if(!Session::has('name')){
            return redirect('login');
        }
        return $next($request);
    }
}