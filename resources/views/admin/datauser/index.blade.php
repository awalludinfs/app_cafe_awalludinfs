@extends('admin.navbar.main')

@section('judul','Data User |Cafe')
    
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
                <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
            <div class="col" align="right">
                <a type="button" class="btn btn-success btn-circle btn-sm" href="/tuser">tambah</a>
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
                                <th style="width: 190px;">Nama</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 20%;">Sebagai</th>
                                <th style="width: 200px;">Action</th>
                          </thead>
                            <tbody> 
                                @foreach ($user as $user)
                                    <tr role="row" class="odd">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <label class="btn {{ ($user->role == 1) ? 'btn-danger' : 'btn-success'}}">{{ ($user->role == 1) ? 'mananger' : ' kasir'}}</label>
                                        </td>
                                        <td>
                                             <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('adminuser.destroy',$user->id) }}" method="POST">
                                                <a href="{{ route('adminuser.edit',$user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                         </td>
                                    </tr>
                                 @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
         </div> 
    </div> 
@endsection