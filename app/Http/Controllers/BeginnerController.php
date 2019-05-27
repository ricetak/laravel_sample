<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginnerController extends Controller
{
	public function index()
	{
		$data = array();
		$data['name'] = 'tak';
		$data['message'] = 'Hello!';
		
		$today = date('Y/m/d/ H:i:s');
		
		return view('beginner', ['data' => $data, 'today' => $today]);
	}
}
