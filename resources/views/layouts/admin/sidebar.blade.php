    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ asset('storage/images/'.Auth::user()->gambar) }}" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{ Auth::user()->username }}</span>
                <span class="text-secondary text-small">{{ Auth::user()->status }}</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('sejarah_add') }}">
              <span class="menu-title">Sejarah</span>
              <i class="mdi mdi-book-open-variant menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('struktur_pengurus_view') }}">
                <span class="menu-title">Struktur Pengurus</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('visi_misi_add') }}">
              <span class="menu-title">Visi Misi</span>
              <i class="mdi mdi-book-open-variant menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#data" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-folder menu-icon"></i>
            </a>
            <div class="collapse" id="data">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('artikel_view') }}">Artikel</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('keanggotaan_apindo_view') }}">Anggota Apindo</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('gallery_view') }}">Galeri Kegiatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('logo_anggota_view') }}">Logo Anggota</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pelatihan_seminar_view') }}">Pelatihan Seminar</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pesan_hubungi_kami') }}">Pesan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('user') }}">User</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#program_kerja" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Program Kerja</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-book-open menu-icon"></i>
            </a>
            <div class="collapse" id="program_kerja">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('hubungan_industrial_add') }}">Hubungan Industrial</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pelatihan_add') }}">Pelatihan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('hubungan_masyarakat_add') }}">Hubungan Masyarakat</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('bidang_umkm_add') }}">Bidang UMKM</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Ketenagakerjaan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('undang_undang_view') }}">Undang Undang</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('peraturan_pemerintah_view') }}">Peraturan Pemerintah</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('permen_view') }}">Permen</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('kepmen_view') }}">Kepmen</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('surat_edaran_menteri_view') }}">Surat Edaran Menteri</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('perda_dki_view') }}">Perda DKI</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tampilan" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Tampilan Website</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-desktop-mac menu-icon"></i>
            </a>
            <div class="collapse" id="tampilan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('teks_berjalan_add') }}">Teks Berjalan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('footer_add') }}">Footer</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#hubungi_kami" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Halaman Hubungi Kami</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-desktop-mac menu-icon"></i>
            </a>
            <div class="collapse" id="hubungi_kami">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('hubungi_kami_teks_add') }}">Hubungi Kami Teks</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('kantor_sekretariat_add') }}">Kantor Sekretariat</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('kontak_person_add') }}">Kontak Person</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
