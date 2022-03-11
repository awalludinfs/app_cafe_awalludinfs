@extends('admin.navbar.main')

@section('judul','Menu')
    
@section('halaman')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">Menu List</h6>
            </div>
            <div class="col" align="right">
                <a type="button" class="btn btn-success btn-circle btn-sm" href="/tmenu">tambah</a>
            </div>
        </div>
    </div>
    <style>
        body{
            background-image: url('/img/bg.jpg');
           
        }
    </style>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable no-footer " width="100%" cellspacing="0"  style="width: 100%;">
                          <thead class="table-primary">
                             <tr scope="row">
                                <th style="width: 5px;">No</th>
                                <th style="width: 5px;">Button</th>
                                <th style="width: 19px;">Jenis </th>
                                <th style="width: 19%;">Nama</th>
                                <th style="width: 19px;">Harga</th>
                                <th style="width: 19px;">status</th>
                                <th style="width: 19px;">Jumlah Stok</th>
                                <th style="width: 20px;">Action</th>
                          </thead>
                          <tbody> 
                            @foreach ($menu as $menu)
                            <tr role="row" class="odd">
                                <td>{{$loop->iteration}}</td>
                                    <td>
                                        @if( $menu->status == 1)
                                        <a href="{{ url ('datamenu/status/'.$menu->id )}}" class="btn btn-sm btn-danger">Non Ready</a>
                                        @else
                                        <a href="{{ url ('datamenu/status/'.$menu->id )}}" class="btn btn-sm btn-success">Ready</a>    
                                        @endif
                                    </td>
                                </td>
                                <td>{{$menu->jenis}}</td>
                                <td>{{$menu->nama}}</td>
                                <td>Rp{{$menu->harga }}</td>
                                <td>
                                    <label class="btn {{ ($menu->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($menu->status == 1) ? 'Ready' : ' Not Ready' }}</label>
                                </td>
                                <td>{{$menu->stok }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('adminmenu.destroy',$menu->id) }}" method="POST">
                                       <a href="{{ route('adminmenu.edit',$menu->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                   </form>
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