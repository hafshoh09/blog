<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['post'] = Post::latest()->paginate(3);
        return view('welcome', $data);
    }
    public function viewPost($slug){
        $data['post'] = Post::where('slug', $slug)->first();
        return view('viewPost', $data);
    }
}
