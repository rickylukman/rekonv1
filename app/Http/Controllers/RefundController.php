<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index(){
        $data = Refund::all();
        return view('refund.refund',compact('data'));
    }

    public function insertrefund(Request $request) {
        Refund::create($request->all());
        return redirect()->route('refundindex')->with('success','Data Berhasil Ditambahkan!');
    }

    public function showdata($id) {
        $data = Refund::find($id);
        return view('refund.show',compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Refund::find($id);
        $data->update($request->all());
        return redirect()->route('refundindex')->with('success','Data Berhasil Diubah!');
    }

    public function deletedata($id) {
        $data = Refund::find($id);
        $data->delete();
        return redirect()->route('refundindex')->with('success','Data Berhasil Dihapus!');
    }
}
