@include('admin.layout.navbar')
@extends('admin.layout.app')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row mt-2" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Barang yang dipinjam</h4>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection