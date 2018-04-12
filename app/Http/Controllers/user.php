<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\userposts;

use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function dashboard() {

    	$feed = userposts::orderBy('created_at', 'desc')->get();

    //	die(json_encode($feed));

    	return view('user/dash', [
    		'title' => 'dashboard',
    		'feed' => $feed
    	]);
    }

    public function logout() {
    	Auth::logout();

    	redirect('/');
    }
}
