<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="https://play-lh.googleusercontent.com/ZQ_TyRaE6_dglopRryepNdlUTZ53lJfrJO1cDl39_5TpGFR5tCzXZJ94zioobvNt" alt="Fortuna Clinic" style="width: 60px; height: 60px;">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('users.index')}}">Profile Klinik</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('doctors.index')}}">Doctors</a>
                    </li>
                </ul>
                <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fa-solid fa-house"></i><span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('users.index')}}"><i class="fa-solid fa-user"></i>Users</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('users.index')}}"><i class="fa-solid fa-bed"></i>Pasien</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('doctors.index')}}"><i class="fa-solid fa-user-doctor"></i>Doctors</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
