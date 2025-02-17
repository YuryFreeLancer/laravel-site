<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Servises\Category\Servise;

class BaseController extends Controller
{
    public $servise;

    public function __construct(Servise $servise)
    {
        $this->servise = $servise;
    }
}
