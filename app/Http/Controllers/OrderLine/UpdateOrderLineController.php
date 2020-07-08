<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class UpdateOrderLineController extends Controller
{
    public function handle(Order $order, OrderLine $orderLine, Request $request) {

        $orderLine->update($request->all());

        $order->calculateTotal();

        $order->save();

        return $orderLine->fresh();

    }
}
