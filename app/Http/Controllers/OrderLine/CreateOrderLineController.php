<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class CreateOrderController extends Controller
{
    public function handle(Order $order, Request $request) {

        $orderLine = new OrderLine($request->all());

        $order->lines->add($orderLine);

        $order->calculateTotal();

        return response()
            ->json(
                $orderLine->fresh()
            )
            ->setStatusCode(201);
    }
}
