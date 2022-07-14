<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json([
            'success' => 'true',
            'result' => $posts
        ]);
    }
    public function show($slug){
        $post = Post::where('slug', '=', $slug)->with(['category', 'tags'])->first();
        if($post){
            return response()->json([
                'success' => 'true',
                'result' => $post
            ]);
        }
        return response()->json([
            'success' => 'false',
            'error' => 'No post found'
        ]);
       
    }
}
