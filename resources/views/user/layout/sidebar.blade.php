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
            </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="{{route('halamandua')}}"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Dashboard</span></a>
            </li>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="Transaksi">Peminjaman</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Pengembalian</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Permintaan</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Setting</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route ('logout')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Typography">Logout</span></a>
            </li>
        </ul>
    </div>
</div>