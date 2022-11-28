<?php

namespace App\Http\Middleware\Admin;

use Closure;

class RedirectAdminLogin
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */


    public function handle($request, Closure $next)
    {

        //print_r(gettype(session()->get('isadminloged')));
        if(!session()->get('isadminloged'))
        {
            return redirect()->route('adminlogin');
        }

        return $next($request);
    }

}
