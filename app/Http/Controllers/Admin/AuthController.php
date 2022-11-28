<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('admin\auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	/*
	public function index()
	{
		$password = Hash::make(12345678);
		print_r($password);
	}*/
    
	public function login()
	{
		
		return view('admin.login');
	}

    public function doLogin(Request $request)
    {
        $user = Admin::where('email', $request->email)->first();

        if($user)
        {
            if(Hash::check($request->password, $user->password)){
                session()->put('isadminloged', true);
                return redirect()->route('admindashboard');
            }else{
                //session()->flash('error', 'Password is not valid' );
                return redirect()->route('adminlogin')->withstatus(_('Password is not valid'))->witherror(1);
            }
        }else{
            return redirect()->route('adminlogin')->withstatus(_('User Not Found'))->witherror(1);
        }

        return redirect()->route('adminlogin');
    }

    public function forgot_password()
    {
        return view('admin.reset_password');
    }
    

    public function logout()
    {
        session()->flash('isadminloged');
        return redirect()->route('adminlogin');
    }

}

