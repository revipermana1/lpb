<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        return view('posts', [
            'title' => 'Posts' . $title,
            "active" => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        $post->views = $post->views+1;
        $post->save();

        return view('post',[
            'title' => 'Single Post',
            "active" => 'posts',
            'post' => $post
        ]);
    }

    public function popular()
    {
        $post = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.*', 'posts.*')
                ->orderBy('views', 'desc')
                ->get();
            // $post = Post::all()
            //             ->orderBy('views', 'desc')
            //             ->get();


        return view('home',[
                    'title' => 'Home',
                    "active" => 'home',
                    'posts' => $post
                ]);
    }
}
