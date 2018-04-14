<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\userposts;

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class user extends Controller
{
    public function dashboard() {

    	$feed = userposts::orderBy('created_at', 'desc')->get();


    	return view('user/dash', [
    		'title' => 'dashboard',
    		'feed' => $feed
    	]);
    }

    public function logout() {
    	Auth::logout();

    	redirect('/');
    }

    public function post_submit(Request $request) {
    	if(!null == $request->input()) {
    		userposts::insert([
    			['content' => $request->input('content'), 'author_id' => $request->input('author_id'), 'created_at' => Carbon::now(), 'avatar' => $request->input('avatar'), 'author' => $request->input('author')]
    		]);


    	}

    	return redirect("/dash");
    }
}