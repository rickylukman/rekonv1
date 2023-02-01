<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index(){
        return view('refund');
    }
}
