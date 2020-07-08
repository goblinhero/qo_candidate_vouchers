<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class CreateVoucherController extends Controller
{
    public function handle(Request $request) {
        $Voucher = new Voucher($request->all());

        $Voucher->save();

        return response()
            ->json(
                $Voucher->fresh()
            )
            ->setStatusCode(201);
    }
}
