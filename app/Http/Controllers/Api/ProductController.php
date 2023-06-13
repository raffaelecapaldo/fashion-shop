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
        //Eager loading: return also the brand and category data
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

    /**
     * Return a json response with the specified product (if exists in the local db).
    */
    public function show($slug)
    {
        //return the first element with the same slug (without first() rreturn an array)
        $product = Product::with("brand","category")->where('slug',$slug)->first();
        if($product){
            return response()->json([
                "success" => true,
                "results" => $product
            ]);
        }else{
            return response()->json([
                "success" => false,
                "results" => "Product not found!"
            ]);
        }
    }
}
