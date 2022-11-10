<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{
	
	public function getUsers()
	{
		$users = DB::select('select * from users');

		return $users;
	}
}
