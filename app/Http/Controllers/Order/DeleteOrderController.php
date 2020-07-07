<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Routing\Controller;

class DeleteOrderController extends Controller
{
    public function handle(Order $order) {

        $order->delete();

        return response($order)
            ->setStatusCode(200);
        
    }
}
