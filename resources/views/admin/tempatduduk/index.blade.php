@extends('admin.navbar.main')

@section('judul','tempat duduk |cafe')

@section('halaman')
<style>
    body{
        background-image: url('/img/bg.jpg');
       
    }
</style>
<div class="container-fluid" style="height: auto !important;">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <h1 class="h3 mb-4 text-light">Nomer Meja</h1>
            <div class="row">
                <div class="col col-sm-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">Table Status
                            <div class="col" align="right">
                                <a type="button" class="btn btn-success btn-circle btn-sm" href="/tmeja">tambah</a>
                            </div>
                        </div>
                        <div class="card-body" id="table">
                            @foreach ($nomermeja as $nomermeja)
                            <a type="button" name="nomer" id="nomer"><label
                                    class="btn {{ ($nomermeja->no_meja == 1) ? 'btn-primary' : 'btn-success'}}">{{ ($nomermeja->nomer)}}</label></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <h2 class="mt-3 text-bold">Data Pesanan</h2>
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered" width="100%" cellspacing="0" style="width: 100%;">
                                    <thead class="table-primary">
                                        <tr scope="row">
                                            <th style="width: 5px;">No</th>
                                            <th style="width: 190px;">Nama Pembali</th>
                                            <th style="width: 20%;">Jenis</th>
                                            <th style="width: 190px;">Nama</th>
                                            <th style="width: 190px;">Jumlah</th>
                                            <th style="width: 190px;">harga</th>
                                            <th style="width: 190px;">Total</th>
                                            <th style="width: 190px;">Nomer Meja</th>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>Awalludin</td>
                                            <td>makanan</td>
                                            <td>Burger</td>
                                            <td>2</td>
                                            <td>Rp.15.000</td>
                                            <td>Rp.30.000</td>
                                            <td>1</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>2</td>
                                            <td>Awal</td>
                                            <td>makanan</td>
                                            <td>Es teh</td>
                                            <td>2</td>
                                            <td>Rp.5.000</td>
                                            <td>Rp.10.000</td>
                                            <td>2</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>3</td>
                                            <td>Agustina</td>
                                            <td>makanan</td>
                                            <td>Bakso</td>
                                            <td>2</td>
                                            <td>Rp.8.000</td>
                                            <td>Rp.16.000</td>
                                            <td>3</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>4</td>
                                            <td>Anggi</td>
                                            <td>makanan</td>
                                            <td>Nasi Goreng</td>
                                            <td>2</td>
                                            <td>Rp.6.000</td>
                                            <td>Rp.12.000</td>
                                            <td>4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
 @endsection
