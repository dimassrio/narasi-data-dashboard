<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistic;
class DataController extends Controller
{
    public function getView(Request $request, $sub){
		$statistic = Statistic::where('slug', $sub)->get()->first();

		return view('statistic', compact($statistic));
	}
}
