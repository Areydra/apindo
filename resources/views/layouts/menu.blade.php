  <header>

    <!-- Top Navbar  -->
    <div class="top-menubar">
      <div class="topmenu">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <ul class="list-inline top-contacts">
                <li>
                  <i class="fa fa-envelope"></i> Email: <a href="mailto:infodpkapindojaktim@dpkapindojaktim.com"><b>infodpkapindojaktim@dpkapindojaktim.com</b></a>
                </li>
                <li>
                  <i class="fa fa-phone"></i> Hotline: <b>021 – 461 6911</b>
                </li>
              </ul>
            </div>
            <div class="col-md-5">
              <ul class="list-inline top-data">
                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                @if(Auth::user())
                  @if (Auth::user()->role == 'admin')
                      <li class="nav-item">
                        <a class="log-top" href="#">{{ Auth::user()->username }}</a>
                      </li>
                      |
                      <li class="nav-item">
                        @if(Auth::user()->role === 'admin')
                          <a class="log-top" href="{{ route('admin') }}">Halaman admin</a>
                        @endif
                      </li>
                      |
                      <li class="nav-item">
                        <a class="log-top" href="" onclick="event.preventDefault();
                              document.getElementById('logout').submit()" style="color: red">Logout</a>
                      </span>
                    @else  
                      <li class="nav-item">
                        <a class="log-top" href="#">{{ Auth::user()->username }}</a>
                      </li>
                      |
                      <li class="nav-item">
                        <a class="log-top" href="" onclick="event.preventDefault();
                              document.getElementById('logout').submit()" style="color: red">Logout</a>
                      </span>
                  @endif
                <form action="{{ route('logout') }}" method="POST" id="logout">@csrf</form>
                @endif
              </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar -->
    <div class="row" style="margin: 0">
        <div style="padding-left: 10px; width: 100%">
          <a href="/">
              <h1 class="logo">APINDO</h1>
            </a>
          <h2 class="sub-logo">ASOSIASI PENGUSAHA INDONESIA</h2>
          <h3 class="selogan">Your Business Partner in EAST JAKARTA</h3>
          @if(!Auth::user())
          <div class="text-right" style="margin: 59px 5px 59px 0px">
            @if ($errors->has('email') OR $errors->has('password'))
                  <strong style="color:red" style="padding-right: 10%">Username atau Password salah</strong>
            @endif
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <input class="form-control" style="display: inline-block;width: 150px" type="text" name="email" placeholder="EMAIL" value="{{ old('email') }}" value required autofocus="">
              <input class="form-control" style="display: inline-block;width: 150px" type="password" name="password" placeholder="PASSWORD" value="{{ old('password') }}" required>
              <button class="btn btn-general btn-white" type="submit" name="login">LOGIN</button>
            </form>
          </div>
          @endif

        </div>
        @if(!Auth::user())
          <div style="margin: -95px 0 0 -31px">
            <h2 class="region">DPK JAKARTA TIMUR</h2>
          </div>
        @else
          <div style="margin: -55px 0 0 -31px">
            <h2 class="region">DPK JAKARTA TIMUR</h2>
          </div>
        @endif

    {{-- =====LOGO ANGGOTA===== --}}
    @if(!Auth::user())
      <div class="customer-logos slider" style="margin: -10px 0 5px 0; width:100%">
        @foreach ($logo_anggota as $la)
          @if ($la->link)
            <a href="{{ $la->link }}" target="_blank">
              <div class="slider" style="width:80px">
                <img src="{{ asset('storage/images/'.$la->gambar) }}" alt="" width="80px" style="margin: 0 2.8px">
              </div>
            </a>
          @else
              <div class="slider" style="width:80px">
                <img src="{{ asset('storage/images/'.$la->gambar) }}" alt="" width="80px" style="margin: 0 2.8px">
              </div>
          @endif
        @endforeach
      </div>
    @else
      <div class="customer-logos slider" style="margin: -10px 0 5px 0; width:100%">
        @foreach ($logo_anggota as $la)
          @if ($la->link)
            <a href="{{ $la->link }}" target="_blank">
              <div class="slider" style="width:80px">
                <img src="{{ asset('storage/images/'.$la->gambar) }}" alt="" width="80px" style="margin: 0 2.8px">
              </div>
            </a>
          @else
              <div class="slider" style="width:80px">
                <img src="{{ asset('storage/images/'.$la->gambar) }}" alt="" width="80px" style="margin: 0 2.8px">
              </div>
          @endif
        @endforeach
      </div>
    @endif
    {{-- ================== --}}
  </div>

  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix" style="background-image: linear-gradient(#2734AB, #2196f3);">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
      </button>
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" style="margin-top: -15px">
            <li class="nav-item"><a class="nav-link smooth-scroll" href="/">Beranda</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link smooth-scroll dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Tentang Kami</a>
              <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a>
                <a class="dropdown-item" href="{{ route('visi-misi') }}">Visi dan Misi</a>
                <a class="dropdown-item" href="{{ route('struktur_pengurus') }}">Struktur Pengurus</a>
                <a class="dropdown-item" href="{{ route('program_kerja') }}">Program Kerja</a>
                <a class="dropdown-item" href="{{ route('gallery') }}">Galeri</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link smooth-scroll dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Artikel</a>
              <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('bisnis_industri') }}">Bisnis dan Industri</a>
                <a class="dropdown-item" href="{{ route('hukum_ketenagakerjaan') }}">Hukum dan Ketenagakerjaaan</a>
                <a class="dropdown-item" href="{{ route('sdm') }}">Pengembangan SDM</a>
                <a class="dropdown-item" href="{{ route('serikat_pekerja') }}">Serikat Pekerja / Buruh</a>
                <a class="dropdown-item" href="{{ route('lks_tripartite') }}">LKS Tripartite</a>
                <a class="dropdown-item" href="{{ route('informasi_kegiatan') }}">Informasi Kegiatan Anggota</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link smooth-scroll dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Ketenagakerjaaan</a>
              <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('undang_undang') }}">Undang undang</a>
                <a class="dropdown-item" href="{{ route('peraturan_pemerintah') }}">Peraturan pemerintah</a>
                <a class="dropdown-item" href="{{ route('permen') }}">Permen</a>
                <a class="dropdown-item" href="{{ route('kepmen') }}">Kepmen</a>
                <a class="dropdown-item" href="{{ route('surat_edaran') }}">Surat Edaran Menteri</a>
                <a class="dropdown-item" href="{{ route('perda_dki') }}">Perda DKI</a>
                <a class="dropdown-item" href="https://www.bpjsketenagakerjaan.go.id/" target="_blank">BPJS Ketenagakerjaaan</a>
                <a class="dropdown-item" href="https://bpjs-kesehatan.go.id/" target="_blank">BPJS Kesehatan</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link smooth-scroll dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Layanan Anggota</a>
              <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ asset('storage/file/formulir-layanan-konsultasi-anggota-apindo-dpk-jaktim.pdf')}}">Konsultasi</a>
                <a class="dropdown-item" href="{{ asset('storage/file/formulir-layanan-advokasi-anggota-apindo-dpk-jaktim.pdf')}}">Advokasi</a>
                <a class="dropdown-item" href="{{ route('pelatihan_seminar') }}">Pelatihan/Seminar</a>
                <a class="dropdown-item" href="{{ route('informasi_anggota') }}">Informasi Keanggotaan APINDO</a>
                <a class="dropdown-item" href="{{ asset('storage/file/formulir-keanggotaan-apindo-dpk-jaktim.pdf') }}">Pendaftaran Anggota</a>
              </div>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link smooth-scroll dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Ruang Diskusi</a>
              <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('diskusi-pengurus') }}">Diskusi antar pengurus</a>
                <a class="dropdown-item" href="{{ route('diskusi-anggota') }}">Diskusi antar anggota</a>
              </div>
            </li> --}}
            <li class="nav-item"><a class="nav-link smooth-scroll" href="https://forum.dpkapindojaktim.com/forum/" target="_blank">Ruang Diskusi</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ route('hubungi_kami') }}">Hubungi Kami</a></li>
            <li class="nav-item">
              <i class="search fa fa-search search-btn"></i>
            </li>
            <form action="{{ route('cari') }}" method="GET">
              <div class="search-open">
                <div class="input-group animated fadeInUp">
                    <input type="text" class="form-control" placeholder="Search artikel..." aria-describedby="basic-addon2" name="cari">
                    <button type="submit" class="input-group-addon" id="basic-addon2" style="background-color: #2196f3; color:white">Go</button>
                  </div>
                </div>
              </form>
              </li>
            <li>
              <div class="top-menubar-nav">
                <div class="topmenu ">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-9">
                        <ul class="list-inline top-contacts">
                          <li>
                            <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                          </li>
                          <li>
                            <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <ul class="list-inline top-data">
                          <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                          <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                          <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                          <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
