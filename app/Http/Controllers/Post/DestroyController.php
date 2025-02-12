<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)  // Запрос удаление поста
    {
        $post->delete();
        return redirect()->route('post.index');
    }

}
