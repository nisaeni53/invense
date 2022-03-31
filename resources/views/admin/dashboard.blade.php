@include('admin.layout.navbar')
@extends('admin.layout.app')

@section('content') 

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body mt-2">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <!-- Stats Horizontal Card -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h2 class="font-weight-bolder mb-0">86%</h2>
                                        <p class="card-text">CPU Usage</p>
                                    </div>
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="cpu" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h2 class="font-weight-bolder mb-0">1.2gb</h2>
                                        <p class="card-text">Memory Usage</p>
                                    </div>
                                    <div class="avatar bg-light-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="server" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h2 class="font-weight-bolder mb-0">0.1%</h2>
                                        <p class="card-text">Downtime Ratio</p>
                                    </div>
                                    <div class="avatar bg-light-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="activity" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h2 class="font-weight-bolder mb-0">13</h2>
                                        <p class="card-text">Issues Found</p>
                                    </div>
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Stats Horizontal Card -->

                <div class="row">
                    <div class="col-lg-8">
                        
                    </div>
                    <!-- Developer Meetup Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top">
                                <p class="px-1 pt-1"> Still Avialable <span style="float: right"><a href="#">See all></a></span> </p>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="no mr-1">
                                        1
                                    </div>
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <img src="{{asset('library/icon/infocus.png')}}" alt="" height="100%">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Infocus</h6>
                                        <h5>Still Avialable</h5>
                                    </div>
                                </div>
                                <div class="media mt-2">
                                    <div class="no mr-1">
                                        2
                                    </div>
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <img src="{{asset('library/icon/penghapus.png')}}" height="100%" alt="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Penghapus</h6>
                                        <h5>Still Avialable</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Developer Meetup Card -->
                </div>

            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection