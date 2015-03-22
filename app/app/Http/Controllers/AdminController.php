<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	//

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		// if not logged in, redirect to login!
		// if not have permission to access admin backend, direct to home

		return view('admin.dashboard');
	}



}
