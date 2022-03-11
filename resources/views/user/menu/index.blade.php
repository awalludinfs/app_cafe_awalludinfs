@extends('user.navbar.main')

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
                <h6 class="m-0 font-weight-bold text-primary">Menu List</h6>
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
                                <th style="width: 19px;">Jenis </th>
                                <th style="width: 19%;">Nama</th>
                                <th style="width: 19px;">Harga</th>
                                <th style="width: 19px;">status</th>
                                <th style="width: 19px;">Jumlah Stok</th>
                          </thead>
                          <tbody> 
                            @foreach ($menu as $menu)
                            <tr role="row" class="odd">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$menu->jenis}}</td>
                                <td>{{$menu->nama}}</td>
                                <td>Rp.{{$menu->harga }}</td>
                                <td>
                                    <label class="btn {{ ($menu->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($menu->status == 1) ? 'Ready' : ' Not Ready' }}</label>
                                </td>
                                <td>{{$menu->stok }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
         </div> 
    </div> 
@endsection