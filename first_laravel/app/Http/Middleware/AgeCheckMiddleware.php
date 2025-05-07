<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$params = null): Response
    {
        $age = $request->age ?? 0;

        if($params == "user"){
            return redirect("/user");
        }
        if($params == "admin"){
            return redirect("/admin");
        }
        if($age > 20){
            return $next($request);
        }
        else{
            dd("Sorry!");
        }

    }
}
