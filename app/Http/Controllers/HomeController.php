<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;
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
        $data['kategori'] = Kategori::latest()->paginate(3);
        return view('welcome', $data);
    }
    public function viewPost($slug){
        $data['post'] = Post::where('slug', $slug)->first();
        $data['kategori'] = Kategori::latest()->paginate(3);
        return view('viewPost', $data);
    }
}
