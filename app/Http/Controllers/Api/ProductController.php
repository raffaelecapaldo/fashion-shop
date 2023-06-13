<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Return a json response with all the products saved in the local db
     */
    public function index()
    {
        //Eager: return also the brand and category data
        $products = Product::with("brand","category")->paginate(5);

        if($products){
            return response()->json([
                "success" => true,
                "results" => $products
            ]);
        }else{
            return response()->json([
                "success" => false,
                "results" => "Products not found!"
            ]);
        }
    }


}
