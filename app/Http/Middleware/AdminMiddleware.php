<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(!session()->has("user")){
    //upis u log
            return redirect()->route("home");
        }


        if(session()->get("user")[0]->ulogaID != 1){
            //upis u log
            return redirect()->route("home");
        }




        return $next($request);
    }
}
