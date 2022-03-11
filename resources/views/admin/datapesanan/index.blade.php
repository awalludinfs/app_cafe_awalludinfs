@extends('admin.navbar.main')

@section('judul','Menu')
    
@section('halaman')
<style>
    body{
        background-image: url('/img/bg.jpg');
       
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">pesanan</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable no-footer " width="100%" cellspacing="0"  style="width: 100%;">
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
                            @foreach ($pesanan as $pesanan)
                            <tr role="row" class="odd">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pesanan->nama_pembeli}}</td>
                                <td>{{$pesanan->jenis}}</td>
                                <td>{{$pesanan->nama}}</td>
                                <td>{{$pesanan->jumlah}}</td>
                                <td>Rp{{$pesanan->harga}}</td>
                                <td>Rp{{$pesanan->total}}</td>
                                <td>{{$pesanan->no_meja}}</td>
                                
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
         </div> 
    </div> 
@endsection