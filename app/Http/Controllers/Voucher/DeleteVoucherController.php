<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;

class DeleteVoucherController extends Controller
{
    public function handle(Voucher $voucher) {

        $voucher->delete();

        return response($voucher)
            ->setStatusCode(200);

    }
}
