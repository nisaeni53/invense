
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
                            <h4 class="card-title">Data Peminjamanan</h4>
                            <button class="btn btn-danger">Clear History</button>
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($pinjam as $row)
                                    <tr>
                                                <td>{{ $row->id }}</td>
                                                <td>{{ $row->nama_barang }}</td>
                                                <td>{{ $row->nama_peminjam }}</td>
                                                <td>{{ $row->jumlah_pinjam }}</td>
                                                <td>{{ $row->jam_pelajaran }}</td>
                                        <td>
                                        <div style="width:175px;"> @if ($row->status == 1)
                                            <div style="float: left; width: 75px"> 
                                            <form action="{{ route('peminjam.update',$row->id) }}" name="status" value="2" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-primary">Terima</button>
                                                <!-- @csrf
                                                @method('DELETE')
                                                <a class="btn btn-danger" href="{{ route('peminjam.destroy',$row->id) }}" method="POST">Tolak</a> -->
                                            </form>
                                            </div>
                                            <div style="float: right; width: 75px"> 
                                            <form action="{{ route('peminjam.destroy',$row->id) }}" method="POST">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection