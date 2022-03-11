@extends('admin.navbar.main')

@section('judul','Dashboard | cafe')

@section('halaman')
<style>
    body {
        background-image: url('/img/bg.jpg');

    }

</style>
<h2 class="mt-3 text-light">Dashbaord</h2>
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
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary">Live Table Status</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="table_status">
                    <div class="row">
                        <div class="col-lg-2 mb-3">
                            <div class="card bg-success text-black shadow">
                                <div class="card-body">
                                    Table 1
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="card bg-success text-black shadow">
                                <div class="card-body">
                                    Table 2
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="card bg-success text-black shadow">
                                <div class="card-body">
                                    Table 3
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="card bg-success text-black shadow">
                                <div class="card-body">
                                    Table 4
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="card bg-primary text-black shadow">
                                <div class="card-body">
                                    Table 5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-lg-2 mb-3">
                            <div class="card bg-primary text-black shadow">
                                <div class="card-body">
                                    Table 6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
