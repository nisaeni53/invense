@extends('admin.layout.app')

@section('content') 

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body mt-2">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <!-- Stats Horizontal Card -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
<<<<<<< HEAD
                                        <h2 class="font-weight-bolder mb-0">Data</h2>
                                        <p class="card-text">Barang</p>
=======
                                        <h2 class="font-weight-bolder mb-0">86%</h2>
                                        <p class="card-text">CPU Usage</p>
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
                                    </div>
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="cpu" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
<<<<<<< HEAD
                                        <h2 class="font-weight-bolder mb-0">Data</h2>
                                        <p class="card-text">Peminjam</p>
=======
                                        <h2 class="font-weight-bolder mb-0">1.2gb</h2>
                                        <p class="card-text">Memory Usage</p>
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
                                    </div>
                                    <div class="avatar bg-light-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="server" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
<<<<<<< HEAD
                                        <h2 class="font-weight-bolder mb-0">Data</h2>
                                        <p class="card-text">yang dipinjam</p>
=======
                                        <h2 class="font-weight-bolder mb-0">0.1%</h2>
                                        <p class="card-text">Downtime Ratio</p>
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
                                    </div>
                                    <div class="avatar bg-light-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="activity" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
<<<<<<< HEAD
                                        <h2 class="font-weight-bolder mb-0">Data</h2>
                                        <p class="card-text">Permintaan</p>
=======
                                        <h2 class="font-weight-bolder mb-0">13</h2>
                                        <p class="card-text">Issues Found</p>
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
                                    </div>
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Stats Horizontal Card -->

                <div class="row">
                    <div class="col-lg-8">
<<<<<<< HEAD
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id pinjam</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah pinjam</th>
                                            <th>Tanggal pinjam</th>
                                            <th>Tanggal kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td>Buku</td>
                                            <td> 100 </td>
                                            <td>10-1-2021</td>
                                            <td>12-1-2021</td>
                                        </tr>
                                        <tr>
                                            <td> 02 </td>
                                            <td>Infocus</td>
                                            <td> 100 </td>
                                            <td>10-1-2021</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td> 03 </td>
                                            <td>Printer</td>
                                            <td> 100 </td>
                                            <td>10-1-2021</td>
                                            <td>12-1-2021</td>
                                        </tr>
                                        <tr>
                                            <td> 04 </td>
                                            <td>Laptop</td>
                                            <td> 2 </td>
                                            <td>10-1-2021</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
=======
                        
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
                    </div>
                    <!-- Developer Meetup Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top">
                                <p class="px-1 pt-1"> Data barang <span style="float: right"><a href="#">Tambah Barang></a></span> </p>
                            </div>
                            <div class="card-body">
                                @foreach ($barang as $item)
                                <div class="media mb-2">
                                    <div class="no mr-1">
                                        1
                                    </div>
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <img src="{{url('') . '/' . $item->image}}" alt="" height="100%">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">{{ $item->namab }}</h6>
                                        <h5>Stok {{ $item->stokb }}</h5>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--/ Developer Meetup Card -->
                </div>

            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection