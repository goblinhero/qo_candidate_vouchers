<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Routing\Controller;

class GetProductController extends Controller
{
    public function handle(Product $product) {
        return $product;
    }
}
