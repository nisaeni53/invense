
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
                                        <th>Id</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Peminjam</th>
                                        <th>Jumlah</th>
                                        <th>Jam Pelajaran</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($pinjam as $row)
                                <tr>
                                @if ($row->status == 1)
                                
                                @else
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->nama_barang }}</td>
                                    <td>{{ $row->nama_peminjam }}</td>
                                    <td>{{ $row->jumlah_pinjam }}</td>
                                    <td>{{ $row->jam_pelajaran }}</td>
                                    <td>{{ $row->updated_at }}</td>
                                </tr>
                                @endif
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection