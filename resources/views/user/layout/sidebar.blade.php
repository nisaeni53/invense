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
    <div class="main-menu-content mt-3">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            </li>
                <li class="nav-item {{ Request::is('user/dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('halamandua')}}"><img src="{{asset('library/icon')}}/Home.png" alt="" height="20" class="mr-2"><span class="menu-item text-truncate" data-i18n="eCommerce">Dashboard</span></a>
            </li>
            </li>
            <li class=" nav-item {{ Request::is('user/peminjaman') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url('/user/peminjaman')}}"><img src="{{asset('library/icon')}}/Folder.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Transaksi">Peminjaman</span></a>
            </li>
            <li class=" nav-item {{ Request::is('user/pengembalian') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url('/user/pengembalian')}}"><img src="{{asset('library/icon')}}/Logout.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Typography">Pengembalian</span></a>
            </li>
            <li class=" nav-item {{ Request::is('user/permintaan') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url('/user/permintaan')}}"><img src="{{asset('library/icon')}}/permintaan.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Typography">Permintaan</span></a>
            </li>
<<<<<<< HEAD
            <li class=" nav-item {{ Request::is('user/setting') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{url('/user/setting')}}"><img src="{{asset('library/icon')}}/Setting.png" alt="" height="20" class="mr-2"><span class="menu-title text-truncate" data-i18n="Typography">Setting</span></a>
=======
            {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('/user/profil')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Profil</span></a>
            </li> --}}
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('/user/setting')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Setting</span></a>
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
            </li>
            {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="{{route ('logout')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Logout</span></a>
            </li> --}}
        </ul>
    </div>
</div>