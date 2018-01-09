<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\User;
use Illuminate\Support\Facades\Input;

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getUsers()
	{
        $users = User::getAllUsers();

		return View('users-list', ['users' => $users]);
	}

	public function registerUser(){
        $input = Input::all();
        $response = User::addUser($input);
        if($response === true){
            return response('User added', 200)
                ->header('Content-Type', 'text/plain');
        }
        else{
            return response($response->message, 500)
                ->header('Content-Type', 'text/plain');
        }
    }

}
