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
        $brands = Brand::all();

        return response()->json([
            "success" => true,
            "results" => $brands
        ]);
    }
}
