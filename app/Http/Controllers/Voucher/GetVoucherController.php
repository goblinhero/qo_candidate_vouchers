<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;

class GetVoucherController extends Controller
{
    public function handle(Voucher $Voucher) {
        return $Voucher;
    }
}
