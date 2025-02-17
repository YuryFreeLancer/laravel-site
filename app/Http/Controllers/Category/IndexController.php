<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;

class IndexController extends BaseController
{

    public function __invoke()
    {

        $categories = Category::all();

        return view('category.index', compact('categories'));
    }
}
