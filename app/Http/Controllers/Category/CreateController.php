<?php

namespace App\Http\Controllers\Category;


use App\Models\Category;


class CreateController extends BaseController
{
    public function __invoke()
    {

        return view('category.create', [
            'category' => [],
            'categories' => Category::with('children')->where('parent_id', 0 )->get(),
            'delimiter' => ' ',
        ]); // Страница создание категории
    }
}
