<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function show() {
        $Products = Product::all();
        return view("tableProduct", compact("Products"));
    }

    public function edit($id) {
        $Product = Product::findOrFail($id);

        @dd($Product);

        return view("editProduct", compact("Product"));
    }
}