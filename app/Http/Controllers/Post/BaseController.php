<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Servises\Post\Servise;

class BaseController extends Controller
{
    public $servise;

    public function __construct(Servise $servise)
    {
        $this->servise = $servise;
    }

}
