<?php

namespace App\Http\Middleware;

use Closure;
use App\OpeningDates;

class CheckDateSet
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
        if(session('date'))
        {
            return $next($request);
        }
        return redirect()->route('admin.home');
    }
}
