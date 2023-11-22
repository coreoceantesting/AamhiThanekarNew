<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogdetailsController extends Controller
{
    public function index()
    {
        return view('blog_detail_two');
    }
}
