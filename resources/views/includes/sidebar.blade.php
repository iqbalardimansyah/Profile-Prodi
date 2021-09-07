<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard.index') }}" class="waves-effect {{ Request::segment(2) == "" ? "mm-active" : "" }}">
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><span> Infografik <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="#">Kerjasama</a></li>
                        <li><a href="email-read.html">Mahasiswa</a></li>
                        <li><a href="email-compose.html">Sumber Daya Manusia</a></li>
                        <li><a href="email-compose.html">Penggunaan Dana</a></li>
                        <li><a href="email-compose.html">Penelitian</a></li>
                        <li><a href="email-compose.html">Pengabdian Kepada Masyarakat</a></li>
                        <li><a href="email-compose.html">Prestasi, Kegiatan, dan Luaran Mahasiswa</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.report.index') }}" class="{{ Request::segment(2) == "laporan-kinerja" ? "mm-active" : "" }} waves-effect">
                        <span> Laporan Kinerja Program Studi (LKPS) </span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <span> Laporan Evaluasi Diri (LED) </span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <span> Lampiran Akreditasi Program Studi </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><span> Laporan Kinerja Program Studi (LKPS) <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li>
                            <a href="javascript:void(0);">Tabel 1 Kerjasama Pendidikan<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li class="{{ Request::segment(2) == "kerja-sama" ? "mm-active" : "" }}"><a href="{{ route('admin.partner.index') }}">Tabel 1-1</a></li>
                                <li><a href="javascript:void(0);">Tabel 1-2</a></li>
                                <li><a href="javascript:void(0);">Tabel 1-3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->