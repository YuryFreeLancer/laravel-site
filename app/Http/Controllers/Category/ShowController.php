<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $category)
    {
        return view('category.show', compact('category')); // Страница просмотр поста
    }

}
