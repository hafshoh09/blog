<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Post;
class AdminController extends Controller
{
    public function index(){
        $data['user'] = User::count();
        $data['kategori'] = Kategori::count();
        $data['post'] = Post::count();
        return view ('admin.index', $data);
    }
}
