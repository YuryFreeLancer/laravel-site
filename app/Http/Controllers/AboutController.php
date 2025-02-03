<?php

namespace App\Http\Controllers;

use App\Models\Old\Post;

class AboutController extends Controller
{

    public function index(){

        $posts = Post::all();

        return view('about');
    }



}
