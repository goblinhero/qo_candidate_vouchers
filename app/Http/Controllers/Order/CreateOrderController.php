<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class CreateOrderController extends Controller
{
    public function handle(Request $request) {
        $order = new Order($request->toArray());

        $order->save();

        return response()
            ->json(
                $order->fresh()
            )
            ->setStatusCode(201);
    }
}
