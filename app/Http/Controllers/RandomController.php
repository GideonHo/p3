<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class RandomController extends Controller {

    public function getText() {
    	return view('text');
    }

    public function postText(Request $request) {

        $this->validate($request,[
          'paragraph'=>'integer|min:1|max:10'
        ]);

        return view('text')->with('paragraph', $request->input('paragraph'));   
        //return view('text')->with('paragraphs', $paragraphs);
    }

    public function getUser() {
        return view('user');
    }

    public function postUser(Request $request) {

        $this->validate($request,[
          'user'=>'integer|min:1|max:10'
        ]);

        return view('user')->with('user', $request->input('user'));   
        //return view('text')->with('paragraphs', $paragraphs);
    }

}
