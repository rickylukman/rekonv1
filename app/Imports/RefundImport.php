<?php

namespace App\Imports;

use App\Models\Refund;
use Maatwebsite\Excel\Concerns\ToModel;

class RefundImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $tgl_trx = explode( '/', $row[1] );
        $tgl_refund = explode( '/', $row[13] );
        return new Refund([
            'tgl_trx' => $tgl_trx[2].'-'.$tgl_trx[1].'-'.$tgl_trx[0],
            'invoice' => $row[2],
            'no_va' => $row[3],
            'sof' => $row[4],
            'amount' => $row[5],
            'ca_code' => $row[6],
            'merchant_name' => $row[7],
            'status' => $row[8],
            'keterangan' => $row[9],
            'bank_receiver' => $row[10],
            'no_rek' => $row[11],
            'receiver' => $row[12],
            'tgl_refund' => $tgl_refund[2].'-'.$tgl_refund[1].'-'.$tgl_refund[0],
        ]);

    }
}
