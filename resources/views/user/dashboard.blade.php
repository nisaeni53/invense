@include('user.layout.navbar')
@extends('user.layout.app')

@section('content') 

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="container">
                    <div class="row match-height">
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Peminjamanmu</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Nama Peminjam</th>
                                                <th>Jumlah Pinjam</th>
                                                <th>Jam Pelajaran Ke</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pinjam as $row)
                                            <tr>
                                                <td>{{ $row->nama_barang }}</td>
                                                <td>{{ $row->nama_peminjam }}</td>
                                                <td>{{ $row->jumlah_pinjam }}</td>
                                                <td>{{ $row->jam_pelajaran }}</td>
                                                <td>@if ($row->status == 1)
                                                    <span class="badge badge-pill badge-light-danger mr-1">Pending</span>
                                                @elseif ($row->status == 2)
                                                <span class="badge badge-pill badge-light-success mr-1">Accepted</span>
                                                @elseif ($row->status == 3)
                                                <span class="badge badge-pill badge-light-primary mr-1">Refused</span>
                                                @endif</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection