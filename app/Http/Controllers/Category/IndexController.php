<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;

class IndexController extends BaseController
{

    public function __invoke()
    {

        //$categories = Category::all();
        // Получаем все категории с их дочерними категориями
        $categories = Category::with('children')->where('parent_id', 0 )->get();
        //dd($categories);
        // Передаем данные в представление
        return view('category.index', compact('categories'));
    }
}
