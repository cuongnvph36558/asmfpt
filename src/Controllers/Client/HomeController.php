<?php

namespace Cuong\Oop\Controllers\Client;

use Cuong\Oop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Nguyễn Bá Kỳ';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}