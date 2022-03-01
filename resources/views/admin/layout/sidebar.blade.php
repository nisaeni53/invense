<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                <span class="logo-brand"> 
                    <img src="{{asset('library/icon/logo.png')}}" alt="" width="100px">
                </span>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content mt-5">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item active"><a class="d-flex align-items-center" href="{{route ('halamansatu')}}"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Barang</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route ('barang.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Data Barang</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route ('peminjam.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Data Peminjam</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route ('barangpinjam.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Data Yang Dipinjam</span></a>
                    </li>
                </ul>
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
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route ('permintaan.index')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Data Permintaan</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route ('logout')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Logout</span></a>
            </li>
        </ul>
    </div>
</div>