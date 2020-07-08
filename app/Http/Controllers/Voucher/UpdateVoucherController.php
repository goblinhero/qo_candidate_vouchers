<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class UpdateVoucherController extends Controller
{
    public function handle(Voucher $Voucher, Request $request) {

        $Voucher->fill($request->all());

        return $Voucher->fresh();

    }
}
