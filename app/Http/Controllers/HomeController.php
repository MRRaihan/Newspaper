<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['featured_posts']=Post::with(['category', 'author'])->Published()->where('is_featured', 1)->get();
        $data['latest_posts']=Post::with(['category', 'author'])->Published()->orderBy('id', 'desc')->paginate(6);
        $data['popular_posts']=Post::Published()->orderBy('total_hit', 'desc')->limit(3)->get();
        $data['categories']=Category::all();
        return view('front.index', $data);
    }
}
