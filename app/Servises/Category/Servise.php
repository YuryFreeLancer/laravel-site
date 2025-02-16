<?php

namespace App\Servises\Category;

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
