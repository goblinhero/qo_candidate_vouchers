<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class UpdateOrderController extends Controller
{
    public function handle(Order $order, Request $request) {

        $order->fill($request->toArray());

        return $order->fresh();

    }
}
