<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class About extends Controller
{
	public function buka_about()
	{
		$session_gue_gitu = "YEE_GAK_ADA";

		return view('about')->with('nilai_session', $session_gue_gitu);
	}
}