<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function __invoke(Request $request)
	{
		$name = $request->get('name');
		$email = $request->get('email');
		$bio = $request->get('bio');

		$users = User::orderBy('id', 'DESC')
			->name($name)
			->email($email)
			->bio($bio)
			->paginate(4);
		
		return view('users', compact('users'));
	}
}
