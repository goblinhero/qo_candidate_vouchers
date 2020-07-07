<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Routing\Controller;

class GetOrdersController extends Controller
{
    public function handle() {
        return Order::all();
    }
}
