<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{

    public function index()
    {

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {

        $categories = Category::all();

        return view('post.create', compact('categories'));

    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
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
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }


    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
    {
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
        ], [
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
        ], [
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
