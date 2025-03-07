<?php

namespace App\Http\Controllers\Category;




use App\Http\Requests\Category\StoreRequest;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();



        $this->servise->store($data);  // Запрос создание поста

        return redirect()->route('category.index');
    }

}
