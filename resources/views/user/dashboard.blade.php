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
                                        <h5>Pinjam</h5>
                                        <p>Barang</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="/user/peminjaman">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h5>Form</h5>
                                        <p>Permintaan</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="/user/permintaan">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h5>Kembalikan</h5>
                                        <p>Barang</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="/user/pengembalian">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h5>Setting</h5>
                                        {{-- <p>01</p> --}}
                                    </div>
                                </div>
                                <hr>
                                <a href="/user/setting">Cek All></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mt-2" id="table-striped">
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
                    </div> --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab-center" data-toggle="pill" href="#home-center" aria-expanded="true">Peminjaman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-center" data-toggle="pill" href="#profile-center" aria-expanded="false">Permintaan</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="about-tab-center" data-toggle="pill" href="#about-center" aria-expanded="false">Barang</a>
                                </li> --}}
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="home-center" aria-labelledby="home-tab-center" aria-expanded="true">
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
                                <div class="tab-pane" id="profile-center" role="tabpanel" aria-labelledby="profile-tab-center" aria-expanded="false">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <th>Nama User</th>
                                                    <th>Jumlah Permintaan</th>
                                                    <th>Foto</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pinjam as $row)
                                                <tr>
                                                    <td>{{ $row->nama_barang }}</td>
                                                    <td>{{ $row->nama_user }}</td>
                                                    <td>{{ $row->jumlah_permintaan }}</td>
                                                    <td>{{ $row->foto_barang }}</td>
                                                    <td>{{ $row->deskripsi}}</td>
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
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection