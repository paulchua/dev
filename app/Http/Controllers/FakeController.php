<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FakeController extends Controller
{
    public function __construct() {}
    public function postIndex(Request $request) 
    {    
        $this->validate($request, ['numUsers' => 'required|numeric|min:1|max:50']);
        //creates users
        $faker = \Faker\Factory::create();
        //get form info

		$numUsers = \Input::get("numUsers");
        $city = \Input::get("wantsCity");
        $state = \Input::get("wantsState");  
        //creates the users array
        $users = Array();

        //add users to array
        for ($i=0; $i < $numUsers; $i++) 
        {
            $users[$i] = Array("name" => $faker->firstName);
			
            $users[$i] = array_merge($users[$i], Array("lastName" => $faker->lastName));
            if ($city) 
            {
                $users[$i] = array_merge($users[$i], Array("city" => $faker->city));
            };
            if ($state) 
            {
                $users[$i] = array_merge($users[$i], Array("state" => $faker->state));
            };
			        
        }
        return view('fake')->with("users", $users);
    }
}
