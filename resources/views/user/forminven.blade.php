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
                                    <h4 class="card-title">Form Peminjaman (ganti nama barang) </h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama barang</label>
                                                    @foreach($barang as $p)
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column" value="{{$p->namab}}"/>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama Peminjam</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Nama Peminjam" name="lname-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Jumlah Pinjam</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="1/2/3/4/5" name="city-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Jam Pelajaran</label>
                                                    {{-- <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Jurusan" /> --}}
                                                    <select class="custom-select" id="customSelect" name="jampelajaran">
                                                        <option selected>Jam Pelajaran ke</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Alasan</label>
                                                    <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Alasan" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Email</label>
                                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email" />
                                                </div>
                                            </div> --}}
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