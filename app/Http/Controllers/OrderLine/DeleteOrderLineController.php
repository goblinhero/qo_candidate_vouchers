<?php

namespace App\Http\Controllers\OrderLine;

use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Routing\Controller;

class DeleteOrderLineController extends Controller
{
    public function handle(Order $order, OrderLine $orderLine) {

        $orderLine->delete();

        $order->calculateTotal();

        return response($orderLine)
            ->setStatusCode(200);

    }
}
