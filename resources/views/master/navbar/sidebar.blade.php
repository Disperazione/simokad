<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="@if (Request::is('admin/*')) {{ route('admin.dashboard') }}@elseif(Request::is('guru/*')){{ route('guru.dashboard') }}@else{{ route('siswa.dashboard') }} @endif">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="@if (Request::is('admin/*')) {{ route('admin.dashboard') }}@elseif(Request::is('guru/*')){{ route('guru.dashboard') }}@else{{ route('siswa.dashboard') }} @endif">
                    <i class=" fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Data</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Data</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Kosong</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Akademik</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                    <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Kosong</span></a>
                </ul>
            </li>
            @auth('admin')
                <li class="nav-item dropdown">
                    <a href="#adminTabelGuru" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-book fe-16"></i>
                        <span class="ml-3 item-text">Guru & Staff</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="adminTabelGuru">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_validation.html"><i
                                    class="fe fe-plus fe-16 text-success"></i><span class="ml-1 item-text">Tambah
                                    Data</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.guru') }}"><span class="ml-1 item-text">Data
                                    Guru</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.staff') }}"><span class="ml-1 item-text">Data
                                    Staff</span></a>
                        </li>
                    </ul>
                </li>
            @endauth
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Siswa</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./form_validation.html"><i
                                class="fe fe-plus fe-16 text-success"></i><span class="ml-1 item-text">Tambah
                                Data</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data
                                Siswa</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-folder fe-16"></i>
                    <span class="ml-3 item-text">Manajemen Data</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-inline.html"><span
                                class="ml-1 item-text">Kosong</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="btn-box w-100 mt-4 mb-1">
            <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269"
                target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
                <i class="fe fe-github fe-17 mr-2"></i><span class="small">Github</span>
            </a>
        </div>
    </nav>
</aside>
