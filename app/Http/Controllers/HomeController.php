<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Post;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['post'] = Post::all();
        return view('welcome', $data);
    }
}
