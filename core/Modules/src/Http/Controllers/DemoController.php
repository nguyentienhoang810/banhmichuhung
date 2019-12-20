<?php

namespace Modules\Http\Controllers;

use App\Http\Controllers\Controller;

class DemoController extends Controller {

    public function getIndex() {
        return view('views::index');
    }
}