<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Routing\Controller;

class GetOrderController extends Controller
{
    public function handle(Order $order) {
        return $order;
    }
}
