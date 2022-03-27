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
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form permintaan</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    @if (session('error'))
                                    <div class="alert alert-error">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                                    <form class="form" action="{{ route('permintaan.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama barang</label>
                                                    {{-- @foreach($barang as $p) --}}
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="nama_barang" value=""/>
                                                </div>
                                                {{-- @endforeach --}}
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama User</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Nama Peminjam" name="nama_peminjam" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Jumlah Permintaan</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="1/2/3/4/5" name="jumlah_pinjam" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Deskripsi</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="1/2/3/4/5" name="jumlah_pinjam" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Foto</label>
                                                    <input type="file" id="city-column" class="form-control" placeholder="1/2/3/4/5" name="jumlah_pinjam" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="hidden" name="status" value="1">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection