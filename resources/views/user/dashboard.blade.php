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
                <div class="container">
                    <div class="row match-height">
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="lanjay">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mr-2"><img src="{{asset('library/icon')}}/Folderblack.png" alt="" style="height: 70%"></div>
                                    </div>
                                    <div class="col-6 text-center ">
                                        <h3>Folder</h3>
                                        <p>01</p>
                                    </div>
                                </div>
                                <hr>
                                <a href="#">Cek All></a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Peminjamanmu</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Project</th>
                                                <th>Client</th>
                                                <th>Users</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset ('assets/admin')}}/app-assets/images/icons/angular.svg" class="mr-75" height="20" width="20" alt="Angular" />
                                                    <span class="font-weight-bold">Angular Project</span>
                                                </td>
                                                <td>Peter Charls</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Lilian Nenez">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="edit-2" class="mr-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="trash" class="mr-50"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset ('assets/admin')}}/app-assets/images/icons/react.svg" class="mr-75" height="20" width="20" alt="React" />
                                                    <span class="font-weight-bold">React Project</span>
                                                </td>
                                                <td>Ronald Frest</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Lilian Nenez">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-pill badge-light-success mr-1">Completed</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="edit-2" class="mr-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="trash" class="mr-50"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset ('assets/admin')}}/app-assets/images/icons/vuejs.svg" class="mr-75" height="20" width="20" alt="Vuejs" />
                                                    <span class="font-weight-bold">Vuejs Project</span>
                                                </td>
                                                <td>Jack Obes</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Lilian Nenez">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-pill badge-light-info mr-1">Scheduled</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="edit-2" class="mr-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="trash" class="mr-50"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset ('assets/admin')}}/app-assets/images/icons/bootstrap.svg" class="mr-75" height="20" width="20" alt="Bootstrap" />
                                                    <span class="font-weight-bold">Bootstrap Project</span>
                                                </td>
                                                <td>Jerry Milton</td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Lilian Nenez">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                            <img src="{{ asset ('assets/admin')}}/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-pill badge-light-warning mr-1">Pending</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="edit-2" class="mr-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i data-feather="trash" class="mr-50"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection