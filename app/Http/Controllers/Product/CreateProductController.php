<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function __invoke(Request $request) {
        $product = new Product($request->all());

        $product->save();

        return response()
            ->json(
                $product->fresh(),
                201
            );
    }
}
