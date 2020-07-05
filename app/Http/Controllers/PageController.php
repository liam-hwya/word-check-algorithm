<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $blogs = Blog::latest()->paginate(8);

        return view('welcome',[
            'blogs' => $blogs
        ]);
    }
    
}
