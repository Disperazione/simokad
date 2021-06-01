<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="javascript:void()" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="javascript:void()" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    @auth('admin')
                        <img src="{{ asset(Auth::guard('admin')->user()->avatar) }}"
                            alt="{{ Auth::guard('admin')->user()->name }}" class="avatar-img rounded-circle">
                    @endauth
                    @auth('guru')
                        <img src="{{ asset(Auth::guard('guru')->user()->avatar) }}"
                            alt="{{ Auth::guard('guru')->user()->name }}" class="avatar-img rounded-circle">
                    @endauth
                    @auth('siswa')
                        <img src="{{ asset(Auth::guard('siswa')->user()->avatar) }}"
                            alt="{{ Auth::guard('siswa')->user()->name }}" class="avatar-img rounded-circle">
                    @endauth
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="javascript:void()"
                    onclick="document.getElementById('logout').submit();">Logout</a>
            </div>
        </li>
    </ul>
</nav>

<form action="{{ route('logout') }}" method="post" id="logout">
    @csrf
</form>
