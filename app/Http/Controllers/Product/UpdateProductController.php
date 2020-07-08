<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class UpdateProductController extends Controller
{
    public function handle(Product $product, Request $request) {

        $product->fill($request->all());

        return $product->fresh();

    }
}
