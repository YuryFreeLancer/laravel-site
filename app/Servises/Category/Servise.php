<?php

namespace App\Servises\Category;


use App\Models\Category;

class Servise
{
    public function store($data)
    {

        $category = Category::create($data);

    }

    public function update($category, $data)
    {

        $category->update($data);

    }
}
