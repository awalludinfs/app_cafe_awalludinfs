@extends('admin.navbar.main')

@section('judul','Laporan | Cafe')

@section('halaman')
{{-- <style>
    body {
        background-image: url('/img/bg.jpg');

    }

</style> --}}
<h1 class="mt-3 text-dark">LAPORAN CAFE</h1>
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Pemasukan Hari Ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.500.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pemasukan Kemarin</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.700.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pemasukan 1 Minggu</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.900.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pemasukan 1 bulan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.1.500.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="mt-3 text-bold ">Laporan Pembelian</h1>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable no-footer " width="100%" cellspacing="0"
                    style="width: 100%;">
                    <thead class="table-success">
                        <tr scope="row">
                            <th style="width: 5px;">No</th>
                            <th style="width: 190px;">Nama Pegawai</th>
                            <th style="width: 190px;">Nama Pembali</th>
                            <th style="width: 20%;">Jenis</th>
                            <th style="width: 190px;">Nama</th>
                            <th style="width: 190px;">Jumlah</th>
                            <th style="width: 190px;">harga</th>
                            <th style="width: 190px;">Total</th>
                            <th style="width: 190px;">Nomer Meja</th>
                            <th style="width: 190px;">Tanngal / Waktu</th>
                            <th style="width: 190px;">Status</th>
                            <th style="width: 190px;">Opsi</th>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($transaksi as $transaksi)
                        <tr role="row" class="odd">
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $transaksi->nama_pegawai}}</td>
                            <td>{{$transaksi->nama_pembeli}}</td>
                            <td>{{$transaksi->jenis}}</td>
                            <td>{{$transaksi->nama}}</td>
                            <td>{{$transaksi->jumlah}}</td>
                            <td>Rp{{$transaksi->harga}}</td>
                            <td>Rp{{$transaksi->total}}</td>
                            <td>{{$transaksi->no_meja}}</td>
                            <td>{{$transaksi->created_at}}</td>
                            <td><label
                                    class="btn {{ ($transaksi->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($transaksi->status == 1) ? 'lunas' : ' belum lunas' }}</label>
                            </td>
                            <td>
                                <a href="#" target="__blank" class="btn btn-danger">cetak</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
         </div> 
    </div> 
@endsection
