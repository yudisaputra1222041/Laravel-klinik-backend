<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
    <a href="{{ route('home') }}" style="color: #3498db; font-size: 25px; font-weight: bold; position: relative; display: inline-block;">
    <img src="https://play-lh.googleusercontent.com/ZQ_TyRaE6_dglopRryepNdlUTZ53lJfrJO1cDl39_5TpGFR5tCzXZJ94zioobvNt" alt="Fortuna Clinic" class="logo" style="max-width: 60px; max-height: 65px; top: 1px; right: 100px; position: relative">
        <div class="text-wrapper">
             <span class="brand-name" style="position: absolute; bottom: 7px; right: -25px;">Fortuna</span>
            <span class="brand-name" style="position: absolute; top: 22px; right: 18px;">Clinic</span>
        </div>
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
                            href="{{route('users.index')}}"><i class="fa-solid fa-bed"></i>Patient</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('doctors.index')}}"><i class="fa-solid fa-user-doctor"></i>Doctors</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{route('doctor_schedules.index')}}"><i class="fa-solid fa-calendar-days"></i>Doctor Schedule</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>




<!-- jQuery (Jika diperlukan) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z8W/AgL6ZQ7gGvhUMfYYYaG6Nk1u12b31Kx+4T" crossorigin="anonymous"></script>

<script>
    // Menggunakan jQuery untuk menangani klik link
    $(document).ready(function() {
        $('#dropdown-toggle').click(function(event) {
            event.stopPropagation(); // Menghentikan penyebaran event ke parent elemen
        });
    });
</script>




