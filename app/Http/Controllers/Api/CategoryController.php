<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Return a json response with all the categories saved in the local db
     */
    public function index()
    {
        $categories = Category::paginate(5);

        if($categories){
            return response()->json([
                "success" => true,
                "results" => $categories
            ]);
        }else{
            return response()->json([
                "success" => false,
                "results" => "Categories not found!"
            ]);
        }
    }

    /**
     * Return a json response with the specified category (if exists in the local db).
    */
    public function show($slug)
    {
        //return the first element with the same slug (without first() rreturn an array)
        $category = Category::where('slug',$slug)->first();
        if($category){
            return response()->json([
                "success" => true,
                "results" => $category
            ]);
        }else{
            return response()->json([
                "success" => false,
                "results" => "Category not found!"
            ]);
        }
    }
}
