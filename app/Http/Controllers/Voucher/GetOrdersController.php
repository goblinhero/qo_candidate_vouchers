<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Voucher;
use Illuminate\Routing\Controller;

class GetVouchersController extends Controller
{
    public function handle() {
        return Voucher::all();
    }
}
