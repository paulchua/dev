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
        $this->validate($request, ['numUsers' => 'required|numeric|min:1|max:200']);
        //creates fake information
        $faker = \Faker\Factory::create();
        //get form input fields

		$numUsers = \Input::get("numUsers");
        $email = \Input::get("wantsEmail");
        $phone = \Input::get("wantsPhone");  
        //creates the users array
        $users = Array();

        //add users to array
        for ($i=0; $i < $numUsers; $i++) 
        {
            $users[$i] = Array("name" => $faker->firstName);
			
            $users[$i] = array_merge($users[$i], Array("lastName" => $faker->lastName));
            if ($email) 
            {
                $users[$i] = array_merge($users[$i], Array("email" => $faker->email));
            };
            if ($phone) 
            {
                $users[$i] = array_merge($users[$i], Array("phoneNumber" => $faker->phoneNumber));
            };
			        
        }
		
        return view('fake')->with("users", $users);


    }
}
