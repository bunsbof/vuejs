<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    public function index()
    {
        return array_reverse(Post::all()->toArray());
    }

    public function add(Request $request)
    {
        $post = new Post([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $post->save();
        return response()->json('The post successfully added');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('The post successfully updated');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json('The post successfully deleted');
    }
}
