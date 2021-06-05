<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center"
                href="{{ route(Auth::getDefaultDriver() . '.dashboard') }}">
                <span class="font-weight-bolder" style="color: #1B68FF;">Sm.</span>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link {{ Request::is(Auth::getDefaultDriver() . '/dashboard') ? 'active' : '' }}"
                    href="{{ route(Auth::getDefaultDriver() . '.dashboard') }}">
                    <i class=" fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Data</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li
                class="nav-item dropdown {{ Request::is(Auth::getDefaultDriver() . '/kelas', Auth::getDefaultDriver() . '/kelas/*') ? 'active' : '' }}">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle nav-link {{ Request::is(Auth::getDefaultDriver() . '/kelas', Auth::getDefaultDriver() . '/kelas/*') ? 'active' : '' }}">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Data</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3 {{ Request::routeIs(Auth::getDefaultDriver() . '.kelas.create') ? 'active' : '' }}"
                            href="{{ route(Auth::getDefaultDriver() . '.kelas.create') }}">
                            <i class="fe fe-plus fe-16 text-success"></i>
                            <span class="ml-1 item-text">Tambah Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3 {{ Request::routeIs(Auth::getDefaultDriver() . '.kelas.index') ? 'active' : '' }}"
                            href="{{ route(Auth::getDefaultDriver() . '.kelas.index') }}"><span
                                class="ml-1 item-text">Kelas</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle nav-link {{ Request::is(Auth::getDefaultDriver() . '/mapel', Auth::getDefaultDriver() . '/mapel/*') ? 'active' : '' }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Akademik</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                    <li class="nav-item">
                        <a class="nav-link pl-3 {{ Request::routeIs(Auth::getDefaultDriver() . '.mapel.index') ? 'active' : '' }}"
                            href="{{ route(Auth::getDefaultDriver() . '.mapel.index') }}"><span
                                class="ml-1 item-text">Mata
                                Pelajaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Guru Mata
                                Pelajaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Jadwal Pelajaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Data KD</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Data KKM</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Data Nilai Siswa</span>
                        </a>
                    </li>
                </ul>
            </li>
            @auth('admin')
                <li
                    class="nav-item dropdown {{ Request::is(Auth::getDefaultDriver() . '/guru', Auth::getDefaultDriver() . '/guru/*') ? 'active' : '' }}">
                    <a href="#TabelGuru" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle nav-link {{ Request::is(Auth::getDefaultDriver() . '/guru', Auth::getDefaultDriver() . '/guru/*') ? 'active' : '' }}">
                        <i class="fe fe-user fe-16"></i>
                        <span class="ml-3 item-text">Guru</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="TabelGuru">
                        <li class="nav-item">
                            <a class="nav-link pl-3 {{ Request::routeIs(Auth::getDefaultDriver() . '.guru.create') ? 'active' : '' }}"
                                href="{{ route(Auth::getDefaultDriver() . '.guru.create') }}">
                                <i class="fe fe-plus fe-16 text-success"></i>
                                <span class="ml-1 item-text">Tambah Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3 {{ Request::is(Auth::getDefaultDriver() . '/guru') ? 'active' : '' }}"
                                href="{{ route(Auth::getDefaultDriver() . '.guru.index') }}">
                                <span class="ml-1 item-text">Data Guru</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endauth
            <li
                class="nav-item dropdown {{ Request::is(Auth::getDefaultDriver() . '/siswa', Auth::getDefaultDriver() . '/siswa/*') ? 'active' : '' }}">
                <a href="#TabelSiswa" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle nav-link {{ Request::is(Auth::getDefaultDriver() . '/siswa', Auth::getDefaultDriver() . '/siswa/*') ? 'active' : '' }}">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Siswa</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="TabelSiswa">
                    <li class="nav-item">
                        <a class="nav-link pl-3 {{ Request::routeIs(Auth::getDefaultDriver() . '.siswa.create') ? 'active' : '' }}"
                            href="{{ route(Auth::getDefaultDriver() . '.siswa.create') }}">
                            <i class="fe fe-plus fe-16 text-success"></i>
                            <span class="ml-1 item-text">Tambah Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3 {{ Request::is(Auth::getDefaultDriver() . '/siswa') ? 'active' : '' }}"
                            href="{{ route(Auth::getDefaultDriver() . '.siswa.index') }}">
                            <span class="ml-1 item-text">Data Siswa</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Etc</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#laporan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Laporan</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="laporan">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Cetak Raport</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Cetak KKM</span>
                        </a>
                    </li>
                </ul>
        </ul>
        <div class="btn-box w-100 mt-4 mb-1">
            <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269"
                target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
                <i class="fe fe-github fe-17 mr-2"></i><span class="small font-weight-bold">Github</span>
            </a>
        </div>
    </nav>
</aside>
