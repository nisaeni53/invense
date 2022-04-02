<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                <span class="logo-brand"> 
                    <img src="{{asset('library/icon/logo.png')}}" alt="" width="125px">
                </span>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content mt-5">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route ('halamansatu')}}"><img src="{{asset('library/icon')}}/Home.png" alt="" height="20" class="mr-2"><span class="menu-item text-truncate" data-i18n="eCommerce">Dashboard</span></a>
            </li>
            <li class=" nav-item {{ Request::is('admin/barang') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url ('admin/barang')}}"><img src="{{asset('library/icon')}}/Folder.png" alt="" height="20" class="mr-2"><span class="menu-item text-truncate" data-i18n="List">Data Barang</span></a>
            </li>
            <li class=" nav-item {{ Request::is('admin/peminjam') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url ('admin/peminjam')}}"><img src="{{asset('library/icon')}}/2 User.png" alt="" height="20" class="mr-2"><span class="menu-item text-truncate" data-i18n="List">Data Peminjam</span></a>
            </li>
            <li class=" nav-item {{ Request::is('admin/barangpinjam') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url ('admin/barangpinjam')}}"><img src="{{asset('library/icon')}}/Buy.png" alt="" height="20" class="mr-2"><span class="menu-item text-truncate" data-i18n="Edit">Data Yang Dipinjam</span></a>
            </li>
            {{--  <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Barang</span></a>
                <ul class="menu-content">
                    <li class="active"><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Data Barang</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-view.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Data Peminjam</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Data Yang Dipinjam</span></a>
                    </li>
                </ul>
            </li>  --}}
            <li class=" nav-item {{ Request::is('admin/permintaan') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url ('admin/permintaan')}}"><img src="{{asset('library/icon')}}/permintaan.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Typography">Data Permintaan</span></a>
            </li>
            <li class=" nav-item {{ Request::is('admin/profil') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url ('admin/profil')}}"><img src="{{asset('library/icon')}}/Profile.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Typography">Profil</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route ('logout')}}"><img src="{{asset('library/icon')}}/Logout.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Typography">Logout</span></a>
            </li>
        </ul>
    </div>
</div>