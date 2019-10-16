<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class About extends Controller
{
	public function buka_about()
	{
		return view('about');
	}
}