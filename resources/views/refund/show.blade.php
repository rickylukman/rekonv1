@extends('layouts.main')

@section('container')
<h1>Refund</h1>

<form action="/updatedatarefund/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tgl_trx" class="col-form-label">Tgl Transaksi</label>
            <input type="date" class="form-control" id="tgl_trx" name="tgl_trx" value="{{ $data->tgl_trx }}">
        </div>
        <div class="form-group col-md-6">
            <label for="tgl_refund" class="col-form-label">Tgl Refund</label>
            <input type="date" class="form-control" id="tgl_refund" name="tgl_refund" value="{{ $data->tgl_refund }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="invoice" class="col-form-label">No Invoice</label>
            <input type="text" class="form-control" id="invoice" name="invoice" value="{{ $data->invoice }}">
        </div>
        <div class="form-group col-md-6">
            <label for="no_va" class="col-form-label">No VA</label>
            <input type="text" class="form-control" id="no_va" name="no_va" value="{{ $data->no_va }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sof" class="col-form-label">SOF</label>
            <input type="text" class="form-control" id="sof" name="sof" value="{{ $data->sof }}">
        </div>
        <div class="form-group col-md-6">
            <label for="amount" class="col-form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" value="{{ $data->amount }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="ca_code" class="col-form-label">CA Code</label>
            <input type="text" class="form-control" id="ca_code" name="ca_code" value="{{ $data->ca_code }}">
        </div>
        <div class="form-group col-md-6">
            <label for="merchant_name" class="col-form-label">Merchant Name</label>
            <select class="form-control" id="merchant_name" name="merchant_name">
                <option value = "Indihome Perangkat Mandiri" {{ $data->merchant_name == 'Indihome Perangkat Mandiri' ? 'selected' : '' }}>Indihome Perangkat Mandiri</option>
                <option value = "Telkom dan PT HKM" {{ $data->merchant_name == 'Telkom dan PT HKM' ? 'selected' : '' }}>Telkom dan PT HKM</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="status" class="col-form-label">Status</label>
            <select class="form-control" id="status" name="status">
                <option value = "REFUND" {{ $data->status == 'REFUND' ? 'selected' : '' }}>REFUND</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="keterangan" class="col-form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $data->keterangan }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="bank_receiver" class="col-form-label">Bank Penerima</label>
            <input type="text" class="form-control" id="bank_receiver" name="bank_receiver" value="{{ $data->bank_receiver }}">
        </div>
        <div class="form-group col-md-6">
            <label for="no_rek" class="col-form-label">Rekening Penerima</label>
            <input type="text" class="form-control" id="no_rek" name="no_rek" value="{{ $data->no_rek }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="receiver" class="col-form-label">Penerima</label>
            <input type="text" class="form-control" id="receiver" name="receiver" value="{{ $data->receiver }}">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href='/refund' class="btn btn-danger">Back</a>
</form>

@endsection