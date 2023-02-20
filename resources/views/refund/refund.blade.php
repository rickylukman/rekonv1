@extends('layouts.main')

@section('container')
<h1>Refund</h1>

<div class="container mb-2">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" data-whatever="@add">Tambah Data</button>
    @if($message = Session::get('success'))
        <div class="alert alert-success m-1" role="alert">
            {{$message}}
        </div>
    @endif
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Refund</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/insertrefund" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tgl_trx" class="col-form-label">Tgl Transaksi</label>
                        <input type="date" class="form-control" id="tgl_trx" name="tgl_trx">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tgl_refund" class="col-form-label">Tgl Refund</label>
                        <input type="date" class="form-control" id="tgl_refund" name="tgl_refund">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="invoice" class="col-form-label">No Invoice</label>
                        <input type="text" class="form-control" id="invoice" name="invoice">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no_va" class="col-form-label">No VA</label>
                        <input type="text" class="form-control" id="no_va" name="no_va">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="sof" class="col-form-label">SOF</label>
                        <input type="text" class="form-control" id="sof" name="sof">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="amount" class="col-form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ca_code" class="col-form-label">CA Code</label>
                        <input type="text" class="form-control" id="ca_code" name="ca_code">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="merchant_name" class="col-form-label">Merchant Name</label>
                        <select class="form-control" id="merchant_name" name="merchant_name">
                            <option value = "Indihome Perangkat Mandiri">Indihome Perangkat Mandiri</option>
                            <option value = "Telkom dan PT HKM">Telkom dan PT HKM</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="status" class="col-form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value = "REFUND">REFUND</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="keterangan" class="col-form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="bank_receiver" class="col-form-label">Bank Penerima</label>
                        <input type="text" class="form-control" id="bank_receiver" name="bank_receiver">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no_rek" class="col-form-label">Rekening Penerima</label>
                        <input type="text" class="form-control" id="no_rek" name="no_rek">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="receiver" class="col-form-label">Penerima</label>
                        <input type="text" class="form-control" id="receiver" name="receiver">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>
</div>

<form action="/refund" method="GET">
    <div class="form-group row">
        <div class="col-sm-3">
        <!-- <input type="search" class="form-control" id="inputSearch" name="inputSearch"> -->
        </div>
    </div>
</form>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No Invoice</th>
            <th scope="col">No Va</th>
            <th scope="col">Tgl Trx</th>
            <th scope="col">Tgl Refund</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)

        <tr>
            <td>{{$d->invoice}}</td>
            <td>{{$d->no_va}}</td>
            <td>{{$d->tgl_trx}}</td>
            <td>{{$d->tgl_refund}}</td>
            <td>
                <a href='/showdatarefund/{{$d->id}}' class="btn btn-warning">Edit</a>
                <a href='/deletedatarefund/{{$d->id}}' class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection