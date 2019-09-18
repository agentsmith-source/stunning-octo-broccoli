<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index () {
        return view("posts", ["posts" => Post::all()]);
    }

    public function delete ($id) {
        $post = Post::where('id', $id)
        ->first();
        $post->delete();

        return redirect('/posts')->with('msg', 'Post '.$post->name.' deleted.');
    }

    public function create1(){
        
        
        return view('createposts');
        
        
    }
    public function create(Request $request){
        $postData = $request->only(["title","content","image","likes"]); //$postData
            Post::create($postData);
            return redirect('/posts');
        //return view('createposts');
        
        
    }
    public function update($id, Request $request){
   
        $postData = $request->only(["title","content","image","likes"]);
        $post = Post::where('id', $id)->first();
        $post->title = $postData['title'];
        $post->content = $postData['content'];
        $post->image = $postData['image'];
        $post->likes = $postData['likes'];
        
        $post->save();
        return redirect('/posts');
}
    public function edit ($id) {
    $post = Post::where('id', $id)
    ->first();
    return view("updatepost", compact('post'));
}
public function like($id){

        $post = Post::find($id);
        $post->likes+= 1;
        $post->save();

        return redirect('/posts');
    }
}





