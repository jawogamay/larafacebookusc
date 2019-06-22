<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    
    public function index(){
		return view('search');
    }

    public function query(){

    	$q = Input::get('q');

    	if($q == ''){

    		return redirect('/home');
    	}

    	$user = User::where('name' , 'LIKE' , '%'.$q.'%')
    				 ->orWhere('email', 'LIKE', '%'.$q.'%')
    				 ->get();

    	$post = Post::with('user')
    	              ->where('content' , 'LIKE' , '%'.$q.'%')
    			      ->get();

    	return view('search')->withUsers($user)
    	                     ->withPosts($post)
    	                     ->withQuery($q);
    }
}
