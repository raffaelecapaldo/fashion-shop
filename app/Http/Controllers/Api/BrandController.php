<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Return a json response with all the brands saved in the local db
     */
    public function index()
    {
        $brands = Brand::paginate(5);

        return response()->json([
            "success" => true,
            "results" => $brands
        ]);
    }

    /**
     * Return a json response with the specified brand (if exists in the local db).
    */
    public function show($slug)
    {
        //return the first element with the same slug (without first() rreturn an array)
        $brand = Brand::where('slug',$slug)->first();
        if($brand){
            return response()->json([
                "success" => true,
                "results" => $brand
            ]);
        }
        else{
            return response()->json([
                "success" => false,
                "results" => "Brand not found!"
            ]);
        }
    }
}
