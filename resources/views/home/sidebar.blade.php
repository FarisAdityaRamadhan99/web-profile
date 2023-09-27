<div class="sidebar-content">
    <ul class="nav nav-primary">

        

        

        <!-- <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Data Master</h4>
        </li> -->


        
        <li class="nav-item {{ request()->is('beranda*') ? ' active' : '' }}">
            <a data-toggle="collapse" href="{{ route('beranda') }}">
                <i class="fas fa-home"></i>
                <p>Home</p>
            </a>
        </li>

        <li class="nav-item {{ request()->is('profile*') ? ' active ' : '' }}">
            <a data-toggle="collapse" href="{{ route('profile') }}">
                <i class="fas fa-user"></i>
                <p>Profile</p>
            </a>
        </li>
        <li class="nav-item {{ request()->is('experience*') ? ' active ' : '' }}">
            <a data-toggle="collapse" href="{{ route('experience') }}">
                <i class="icon-menu"></i>
                <p>Experience</p>
            </a>
        </li>
        <li class="nav-item {{ request()->is('karya*') ? ' active ' : '' }}">
            <a data-toggle="collapse" href="{{ route('karya') }}">
                <i class="fas fa-check"></i>
                <p>Karya</p>
            </a>
        </li>

        <!-- <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Data Pengguna</h4>
        </li> -->
        
        <!-- <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Manajemen Sekolah</h4>
        </li> -->
        <!-- <li class="nav-item {{ request()->is('kelas') ? ' active' : '' }}">
            <a class="nav-link" href="">
                <i class="fas fa-window-restore"></i>
                <p>Daftar Kelas</p>
            </a>
        </li>
        <li class="nav-item {{ request()->is('periodik') ? ' active' : '' }}">
            <a class="nav-link" href="">
                <i class="fas fa-calendar"></i>
                <p>Tahun Ajaran</p>
            </a>
        </li>
        <li class="nav-item {{ request()->is('mapel') ? ' active' : '' }}">
            <a class="nav-link" href="">
                <i class="fas fa-book"></i>
                <p>Mata Pelajaran</p>
            </a>
        </li> -->
        <!-- <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Penilaian</h4>
        </li> -->
    </ul>

</div>