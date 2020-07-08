<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class UpdateVoucherController extends Controller
{
    public function handle(Voucher $voucher, Request $request) {

        $voucher->update($request->all());

        return $voucher->fresh();

    }
}
