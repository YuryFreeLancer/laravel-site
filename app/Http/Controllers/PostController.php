<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    
    public function index(){
        //return 'this is my page';
        $posts = Post::where('title','Мужской набор')
        ->orwhere('content','Мужской набор')
        ->get();
        foreach($posts as $po){
            dump($po->title);
        }
        //dd($posts);
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
        
}
