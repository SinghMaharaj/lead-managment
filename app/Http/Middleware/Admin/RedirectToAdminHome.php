<?php

namespace App\Http\Middleware\Admin;

use Closure;

class RedirectToAdminHome
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */


    public function handle($request, Closure $next)
    {

        if(session()->get('isadminloged')!= NULL)
            return redirect()->route('admindashboard');

        return $next($request);
    }

}
