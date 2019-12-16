<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view('page.trangchu');
    }

    public function getProductType() {
        return view('page.product_type');
    }

    public function getProductDetail() {
        return view('page.product_detail');
    }

    public function getContact() {
        return view('page.contact');
    }
}
