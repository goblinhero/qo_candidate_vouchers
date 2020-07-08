<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class CreateProductController extends Controller
{
    public function handle(Request $request) {
        $product = new Product($request->all());

        $product->save();

        return response()
            ->json(
                $product->fresh()
            )
            ->setStatusCode(201);
    }
}
