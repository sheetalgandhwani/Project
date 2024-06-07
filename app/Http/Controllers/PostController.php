<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('addpost');
    }
    public function createPost(Request $request){
        $post = new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('post_created','Data Inserted Successfully');
    }
    public function getPost(){
        $posts = Post::orderBy('id', 'asc')->get();
        return view('posts', compact('posts'));
    }
    public function getPostById($id){
        $post = Post :: where('id', $id)->first();
        return  view('single-post', compact('post'));
    }
    public function deletePost($id){
        Post::where('id', $id)->delete();
        return back()->with('post_deleted', "Post has been deleted");
    }
    public function editPost($id){
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request){
        $post = Post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('post_updated', "Post has been updated successfully!");
    }
}
