<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LoremController extends Controller
{
	
	    public function getIndex()
    {
        return view('lorem');
    }

    public function postIndex(Request $request)
    {
        $numParas = $request->input('paragraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParas);
		return view('lorem')->with("paragraphs", $paragraphs);
    }

}


