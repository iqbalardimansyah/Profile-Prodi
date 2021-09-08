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
                    <a href="javascript:void(0);" class="waves-effect"><span> Tabel Laporan Kinerja Program Studi (LKPS) <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li>
                            <a href="javascript:void(0);">Tabel 1 Kerjasama <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li class="{{ Request::segment(2) == "kerja-sama" ? "mm-active" : "" }}"><a href="{{ route('admin.partner.index') }}">1-1 Pendidikan</a></li>
                                <li><a href="javascript:void(0);">1-2 Penelitian</a></li>
                                <li ><a href="javascript:void(0);">1-3 PkM</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 2 Mahasiswa <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li><a href="javascript:void(0);">2a Seleksi Mahasiswa</a></li>
                                <li><a href="javascript:void(0);">2b Mahasiswa Asing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 3 Dosen <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li><a href="javascript:void(0);">3a1 Dosen Tetap Perguruan Tinggi (DTPT)</a></li>
                                <li><a href="javascript:void(0);">3a2 Dosen Pembimbing Utama</a></li>
                                <li><a href="javascript:void(0);">3a3 EWMP DTPT</a></li>
                                <li><a href="javascript:void(0);">3a4 Dosen Tidak Tetap</a></li>
                                <li><a href="javascript:void(0);">3b1 Rekognisi Dosen</a></li>
                                <li><a href="javascript:void(0);">3b2 Penelitian DTPS</a></li>
                                <li><a href="javascript:void(0);">3b3 PkM DTPS</a></li>
                                <li><a href="javascript:void(0);">3b4-1 Publikasi Ilmiah DTPS</a></li>
                                <li><a href="javascript:void(0);">3b5 Sitasi</a></li>
                                <li><a href="javascript:void(0);">3b7-1 HKI Paten, Paten Sederhana</a></li>
                                <li><a href="javascript:void(0);">3b7-2 HKI Hak Cipta, Desain, Produk Industri, Dll.</a></li>
                                <li><a href="javascript:void(0);">3b7-3 Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial</a></li>
                                <li><a href="javascript:void(0);">3b7-4 Buku Ber-ISBN, Book Chapter</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 4 Dana</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 5 Pendidikan <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li><a href="javascript:void(0);">5a Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</a></li>
                                <li><a href="javascript:void(0);">5b Integrasi Kegiatan Penelitan atau PkM dalam Pembelajaran</a></li>
                                <li><a href="javascript:void(0);">5c Kepuasan Mahasiswa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 6 Penelitian DTPS - Mahasiswa</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 7 PkM DTPS - Mahasiswa</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Tabel 8 Lulusan, Prestasi dan Luaran Mahasiswa <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li><a href="javascript:void(0);">8a IPK Lulusan</a></li>
                                <li><a href="javascript:void(0);">8b1 Prestasi Akademik</a></li>
                                <li><a href="javascript:void(0);">8b2 Prestasi Non Akademik</a></li>
                                <li><a href="javascript:void(0);">8c Masa Studi</a></li>
                                <li><a href="javascript:void(0);">8d1 Waktu Tunggu</a></li>
                                <li><a href="javascript:void(0);">8d2 Kesesuaian Bidang Kerja</a></li>
                                <li><a href="javascript:void(0);">8e1 Tempat Kerja</a></li>
                                <li><a href="javascript:void(0);">8e2 Kepuasan Pengguna</a></li>
                                <li><a href="javascript:void(0);">8f1-1 Publikasi Ilmiah Mahasiswa</a></li>
                                <li><a href="javascript:void(0);">8f2 Sitasi</a></li>
                                <li><a href="javascript:void(0);">8f4-1 HKI Paten, Paten Sederhana</a></li>
                                <li><a href="javascript:void(0);">8f4-2 HKI Hak Cipta, Desain, Produk Industri, Dll.</a></li>
                                <li><a href="javascript:void(0);">8f4-3 Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial</a></li>
                                <li><a href="javascript:void(0);">8f4-4 Buku Ber-ISBN, Book Chapter</a></li>
                                <li><a href="javascript:void(0);">3b6 Sitasi</a></li>
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