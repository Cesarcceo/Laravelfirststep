<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller{

    function index() {
        $post = ['post1', 'post2'];
        // return view('test', ['post'=>$post]);
        return view('test', compact('post','categories'));
    }
    function other($post) {
        echo $post;
    }
}
