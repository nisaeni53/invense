
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
                            <h4 class="card-title">Data Barang</h4>
                            <a href="{{route ('barang.create')}}"><button class="btn btn-primary">Tambah Data</button></a>
                        </div>
                        
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                            <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Foto</th>
                                        <th>Nama Barang</th>
                                        <th>Kondisi</th>
                                        <th>Jenis</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <img src="{{url('') . '/' . $barang->image}}" width="100px">
                                        </td>
                                        <td>{{ $barang->namab }}</td>
                                        <td>{{ $barang->kategorib }}</td>
                                        <td>{{ $barang->jenisb }}</td>
                                        <td>{{ $barang->stokb }}</td>
                                        <td>{{ $barang->tanggalb }}</td>
                                        <td>
                                        <!--
                                        <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
                                            <a href="javascript:void(0);">
                                                <button class="btn btn-success" href="{{ route('barang.edit',$barang->id) }}">Edit</button>
                                                @csrf
                                            </a>
                                            
                                            
                                            <a href="javascript:void(0);">
                                            @method('DELETE')
                                                <button class="btn btn-danger">Hapus</button>
                                            </a>
                                        </form>
                                        -->
                                        <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
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
        </div>
    </div>
</div>
{!! $barangs->links() !!}

@endsection