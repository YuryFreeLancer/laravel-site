<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){

        //$posts = Post::all();
        $category = Category::find(1);
        $post = Post::find(1);
        //$posts = Post::where('category_id', $category->id)->get();
        dd($post->tags);

        //return view('post.index', compact('posts'));
    }

    public function create(){

        return view('post.create');

    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }


    public function update(Post $post){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

     public function destroy(Post $post){
         $post->delete();
         return redirect()->route('post.index');
     }

    public function delete(){
        $post = Post::withTrashed()->find(14);
        $post->restore();
        dd('deleted');

    }

    public function firstOrCreate()
    {

        $anotherPost = [
            'title' => 'some post',
            'content' => 'Умные часы WATCH GT 5, 41mm, черный',
            'image' => 'some image',
            'likes' => 5000,
            'is_published' => 1,
        ];

            $post = Post::firstOrCreate([
                'title' => 'some post_',
            ],[
                'title' => 'some post_',
                'content' => 'some content',
                'image' => 'some image',
                'likes' => 5000,
                'is_published' => 1,
            ]);
            dump($post->content);
            dd('finished');
    }

    public function updateOrCreate()
    {

        $anotherPost = [
            'title' => 'some post',
            'content' => 'Умные часы WATCH GT 5, 41mm, черный',
            'image' => 'some image',
            'likes' => 5000,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some post_',   //Если нашел то обновил, если не нашел то создал
        ],[
            'title' => 'some post_',
            'content' => 'some content update',
            'image' => 'some image',
            'likes' => 5000,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }


}
