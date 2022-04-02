
@extends('admin.layout.app')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<<<<<<< HEAD
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <!-- Center Pills Start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabel Permintaan</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home-tab-center" data-toggle="pill" href="#home-center" aria-expanded="true">Peminjaman</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="profile-tab-center" data-toggle="pill" href="#profile-center" aria-expanded="false">Pengembalian</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab-center" data-toggle="pill" href="#about-center" aria-expanded="false">Barang</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane" id="home-center" aria-labelledby="home-tab-center" aria-expanded="true">
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
                                                            <td> 100 </td>
                                                            <td>10-1-2021</td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane active" id="profile-center" role="tabpanel" aria-labelledby="profile-tab-center" aria-expanded="false">
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
                                                            <td> 3 </td>
                                                            <td>10-1-2021</td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="about-center" role="tabpanel" aria-labelledby="about-tab-center" aria-expanded="false">
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
                                    </div>
                                </div>
                            </div>
=======
            <div class="row mt-2" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Permintaan</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <!-- <th>Foto</th> -->
                                        <th>Nama User</th>
                                        <th>Nama Barang</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah Permintaan</th>
                                        <th>Tanggal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($permintaan as $row)
                                    <tr>
                                                <td>{{ $row->id }}</td>
                                                
                                                <td>{{ $row->nama_user }}</td>
                                                <td>{{ $row->nama_barang }}</td>
                                                <td>{{ $row->deskripsi }}</td>
                                                <td>{{ $row->jumlah_permintaan }}</td>
                                                <td>{{ $row->created_at }}</td>
                                        <td>
                                        <div style="width:175px;"> @if ($row->status == 1)
                                            <div style="float: left; width: 75px"> 
                                            <form action="{{ route('dpermintaan.update',$row->id) }}" name="status" value="2" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-primary">Terima</button>
                                                <!-- @csrf
                                                @method('DELETE')
                                                <a class="btn btn-danger" href="{{ route('peminjam.destroy',$row->id) }}" method="POST">Tolak</a> -->
                                            </form>
                                            </div>
                                            <div style="float: right; width: 75px"> 
                                            <form action="{{ route('dpermintaan.destroy',$row->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                            </form>
                                            </div> @else
                                            <span class="badge badge-pill badge-light-success mr-1">Accepted</span>
                                            @endif
                                        </div>       
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
                        </div>
                        <!-- Centered Pills End -->
            </section>
            <!-- Dashboard Ecommerce ends -->
        </div>
    </div>
</div>
@endsection