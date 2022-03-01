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
                                <form action="{{ route('barang.update',$barang->id) }}" method="POST">
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
                                                    <label for="kategorib">Kategori</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="kategorib" class="form-control" name="kategorib" value="{{ $barang->kategorib }}" placeholder="Kategori" />
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