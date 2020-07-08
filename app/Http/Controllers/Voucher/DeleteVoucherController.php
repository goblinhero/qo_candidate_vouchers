<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;

class DeleteVoucherController extends Controller
{
    public function handle(Voucher $Voucher) {

        $Voucher->delete();

        return response($Voucher)
            ->setStatusCode(200);

    }
}
