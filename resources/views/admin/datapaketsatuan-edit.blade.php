@extends('layouts.template')

@section('title', 'Data Paket')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Paket Satuan</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Edit Data Paket Satuan</h2>
                <div class="card-header col-12">
                    <strong class="card-title">Data Paket</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/datapaketsatuan/{{ $pakets->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                <div class="form-group mb-3">
                                <label for="simpleinput">Kode Paket</label>
                                <input type="text" id="simpleinput" name="kd_paketsatuan" value="{{ $pakets->kd_paketsatuan }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Nama Paket</label>
                                <input type="text" id="simpleinput" name="nama_paketsatuan" value="{{ $pakets->nama_paketsatuan }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Keterangan Paket</label>
                                <input type="text" id="simpleinput" name="ket_paketsatuan" value="{{ $pakets->ket_paketsatuan }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Harga</label>
                                <input type="text" id="simpleinput" name="harga_paketsatuan" value="{{ $pakets->harga_paketsatuan }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Outlet</label>
                                <select class="form-control @error('outlet_id') is-invalid @enderror"
                                            name="outlet_id">
                                    @foreach ($outlet as $item)
                                        <option value="{{ $item->id }}" @selected($pakets->outlet_id == $item->id)>
                                            {{ $item->nama_outlet }}</option>
                                    @endforeach
                                        </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection