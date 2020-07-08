<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class UpdateOrderController extends Controller
{
    public function handle(Order $order, Request $request) {

        $order->update($request->all());

        $order->calculateTotal();

        return $order->fresh();

    }
}
