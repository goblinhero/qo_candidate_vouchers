<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Routing\Controller;

class GetProductsController extends Controller
{
    public function handle() {
        return Product::all();
    }
}
