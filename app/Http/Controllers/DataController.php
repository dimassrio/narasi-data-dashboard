<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getView(Request $request, $sub){
		return view($sub);
	}
}
