<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}



	public function getRegister(){

		$list = User::all();

		return View::make('details')->with('list',$list);
	}



	public function postRegister(){

		if (Input::has('id')) {
			$user = User::find(Input::get('id'));
		} else {

		$user = new User;	
		
		}
		$user->nama = Input::get('nama');
		$user->no_tel = Input::get('no_tel');
		$user->emel = Input::get('emel');
		$user->save();	

		return Redirect::to('details');

	}

	public function getDetails(){

	$list = User::where('id', '=', Input::get('id'))->first();

	return View::make('register')->with('list',$list);
	}

}


	