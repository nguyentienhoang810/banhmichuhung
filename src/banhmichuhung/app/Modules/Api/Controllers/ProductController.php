<?php
namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;
use App\Modules\Models\Product;


class ProductController extends Controller{
    
    public function __construct(){
        parent::__construct();
        
    }

    public function getAllProds() {
        $prods = Product::all();
        return response()->json($prods, 200);
    }

    public function getPromoProds() {
        $prods = Product::where('promotion_price', '<>', '0')->get();
        return response()->json($prods, 200);
    }

    public function geNewProds() {
        $prods = Product::where('new', '==', '1')->get();
        return response()->json($prods, 200);
    }
}