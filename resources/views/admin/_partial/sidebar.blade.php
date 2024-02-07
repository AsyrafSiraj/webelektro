<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Dashboard</span>
    </a>
    <ul class="side-menu top">
        <li class="nav-link {{ ($sidemenu == 'pengumuman') ? 'active' : '' }}">
            <a href="/dashboard/pengumuman" >
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Pengumuman</span>
            </a>
        </li>
        <li class="nav-link {{ ($sidemenu == 'fasilitas') ? 'active' : '' }}">
            <a href="/dashboard/fasilitas" >
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Fasilitas</span>
            </a>
        </li>
        <li class="nav-link {{ ($sidemenu == 'dosen') ? 'active' : '' }}">
            <a href="/dashboard/dosen" >
                <i class='bx bxs-group' ></i>
                <span class="text">Dosen</span>
            </a>
        </li>
        <li class="nav-link {{ ($sidemenu == 'prestasi') ? 'active' : '' }}">
            <a href="/dashboard/prestasi" >
                <i class='bx bxs-trophy' ></i>
                <span class="text">Prestasi</span>
            </a>
        </li>
    </ul>

    <ul class="side-menu top">
        {{-- <li class="nav-link">
            <a href="#" >
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li> --}}
        <li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="logout border-0">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text ms-3">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->