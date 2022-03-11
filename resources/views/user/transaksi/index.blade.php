@extends('user.navbar.main')

@section('judul','Transaksi | cafe')

@section('halaman')
<style>
    body {
        background-image: url('/img/bg.jpg');

    }

</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
            </div>
        </div>
    </div>
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
                            <th style="width: 190px;">Status</th>
                            <th style="width: 190px;">Opsi</th>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $transaksi)
                        <tr role="row" class="odd">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$transaksi->nama_pembeli}}</td>
                            <td>{{$transaksi->jenis}}</td>
                            <td>{{$transaksi->nama}}</td>
                            <td>{{$transaksi->jumlah}}</td>
                            <td>Rp{{$transaksi->harga}}</td>
                            <td>Rp{{$transaksi->total}}</td>
                            <td>{{$transaksi->no_meja}}</td>
                            <td>
                                <label class="btn {{ ($transaksi->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($transaksi->status == 1) ? 'lunas' : ' belum lunas' }}</label>
                            </td>
                            <td>
                                <a href="#" target="__blank" class="btn btn-danger"> Cetak </a>
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
