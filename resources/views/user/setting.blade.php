@include('user.layout.navbar')
@extends('user.layout.app')

@section('content') 
<style>
    p.card-text {
        color: #625F6E;
    }
</style>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <section id="card-text-alignment">
                    <h1 class="mb-2">Setting</h1>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <a href="#">
                                <div class="card text-center mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Profil</h4>
                                        <p class="card-text">Lihat, Edit Profilmu disini</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <a href="#">
                                <div class="card text-center mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Personalitas</h4>
                                        <p class="card-text">Lihat, Edit Personalitas disini</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <a href="#">
                                <div class="card text-center mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Privacy</h4>
                                        <p class="card-text">Ganti password atau yang lainnya</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <a href="{{route ('logout')}}">
                                <div class="card text-center mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Logout</h4>
                                        <p class="card-text">Keluar akun</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection