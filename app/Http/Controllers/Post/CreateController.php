<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();

        //return view('post.create', compact('categories', 'tags')); // Страница создание поста
        return view('post.create', ['tags' => $tags],[
            'category' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ' -> ',
        ]); // Страница создание поста
    }

}
