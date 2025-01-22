<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{

    public function index(){

        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function create(){
        $postArr = [
            [
                'title' => 'HUAWEI',
                'content' => 'Умные часы WATCH GT 5, 41mm, черный'
            ],
            [
                'title' => 'Xiaomi',
                'content' => 'Умные часы Redmi Watch 5 Active, 51mm, черный'
            ]
            ];

            foreach($postArr as $item){
                Post::create([
                    'title' => $item['title'],
                    'content' => $item['content'],
                ]);
            }
            dd('Yes');
    }

    public function update(){

        $post = Post::find(6);

        $post->update([
            'likes' => 465
        ]);
        dd($post->likes);

    }

    // public function delete(){
    //     $post = Post::find(1);
    //     $post->delete();
    //     dd('deleted');

    // }

    public function delete(){
        $post = Post::withTrashed()->find(1);
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
