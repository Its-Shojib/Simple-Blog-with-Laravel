<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{
    
    function addProduct(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $desc = $request->input('desc');

    }
    
}
