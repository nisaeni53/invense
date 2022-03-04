@include('admin.layout.navbar')
@extends('admin.layout.app')

@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Barang</h4>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Input Yang Anda Masukkan Salah.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="card-body">
                                <form action="{{ route('barang.update',$barang->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="namab">Nama Barang</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="namab" class="form-control" name="namab" value="{{ $barang->namab }}" placeholder="Nama Barang" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="kategorib">Kondisi</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="kategorib" class="form-control" name="kategorib" value="{{ $barang->kategorib }}" placeholder="Kategori" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="jenisb">Jenis</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="jenisb" class="form-control" name="jenisb" value="{{ $barang->jenisb }}" placeholder="Kayu / Elektronik" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="stokb">Stok</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" id="stokb" class="form-control" name="stokb" value="{{ $barang->stokb }}" placeholder="Stok" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="tanggalb">Tanggal</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="tanggalb" class="form-control flatpickr-basic flatpickr-input active" name="tanggalb" value="{{ $barang->tanggalb }}" placeholder="YYYY-MM-DD" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-3 col-form-label">
                                                    <label for="foto">Foto</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="image">
                                                        <img src="/image/{{ $barang->image }}" width="300px">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection