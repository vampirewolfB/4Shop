<?php

namespace App\Http\Middleware;

use Closure;
use App\OpeningDates;

class CheckShopOpen
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
        $dates = OpeningDates::whereDate('start', '<=', date('Y-m-d'))->whereDate('end', '>=', date('Y-m-d'))->get();
        if($dates->count())
        {
            if($request->route()->getName() == 'closed')
            {
                return redirect()->route('home');
            }
            session(['opening_id' => $dates[0]->id]);
            return $next($request);
        }
        elseif ($request->route()->getName() == 'closed')
        {
            return $next($request);
        }

        return redirect()->route('closed');
        
    }
}
