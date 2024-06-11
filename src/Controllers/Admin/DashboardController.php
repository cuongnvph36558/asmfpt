<?php

namespace Cuong\Oop\Controllers\Admin;

use Cuong\Oop\Commons\Controller;

use Cuong\Oop\Models\Product;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
