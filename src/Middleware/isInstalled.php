<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\File;

use Closure;
use Illuminate\Http\Request;

class isInstalled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!File::exists(storage_path('installed')))
        {
            return redirect('/install');
        }

        return $next($request);
    }
}
