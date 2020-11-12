<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
	public function home()
	{
		$opinions = Opinion::all();
		return view('welcome', ['opinions' => $opinions]);
	}

	public function createOpinion()
	{
		$title = request()->input('title');
		$content = request()->input('content');

		$opinion = Opinion::create([
			'title' => $title,
			'content' => $content
		]);

		// $opinions = Opinion::all();
		// return view('welcome', ['opinions' => $opinions]);
	}
}
