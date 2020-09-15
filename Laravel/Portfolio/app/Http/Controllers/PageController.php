<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
  function index() {
		$work = DB::table('experiences')->where('category_id', '0')->get();
		$internship = DB::table('experiences')->where('category_id', '2')->get();
		$certifications = DB::table('certifications')->get();
	
		return view('main', [
			'work' => $work,
			'internship' => $internship,
			'certifications' => $certifications
		]);
	}

	function login() {
		return view('login');
	}

	function auth(Request $request) {
		\Auth::attempt(['email' => $request->email, 'password' => $request->password]);
		return redirect('/');
	}

	function logout() {
		\Auth::logout();
		return redirect('/');
	}

	function register() {
		return abort(404);
	}

}
