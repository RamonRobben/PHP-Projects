<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index() {
		return view('index');
	}

	public function employees() {
		$employees = \DB::table('employees')->get(['firstname', 'lastname', 'email', 'email_verified_at']);
		
		return view('employees', [
			'employees' => $employees
		]);
	}

}
