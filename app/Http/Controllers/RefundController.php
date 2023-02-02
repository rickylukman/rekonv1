<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index(){
        $data = Refund::all();
        return view('refund',compact('data'));
    }

    public function insertrefund(Request $request) {
        Refund::create($request->all());
        return redirect()->route('refundindex')->with('success','Data Berhasil Ditambahkan!');
    }
}
