<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends BaseController
{
    public function __invoke(Category $category)
    { //dd($category);
        return view('category.show', compact('category')); // Страница просмотр поста
    }

}
