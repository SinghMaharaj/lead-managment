<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Lead;

class DashboardController extends Controller
{
	public function __construct()
    {

    }

    public function index()
    {
	
		$data = array();
		$data['leads'] = Lead::count();
    	return view('admin.dashboard', $data);
    }

}
