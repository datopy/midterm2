<?php

namespace App\Http\Middleware;

use Closure;

use App\HavePermition;

class CanPost
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
        $havepermition=HavePermition::firstOrFail();
        if ($havepermition["have_permition"]>1) {
            return redirect()->route("mainpage");
        }
 
       return $next($request);
    }
}
