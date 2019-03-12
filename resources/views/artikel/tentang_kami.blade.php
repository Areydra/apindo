@include('layouts.header')
@include('layouts.menu')
  <!--====================================================
                        ABOUT
======================================================-->
  <section id="about" class="about">
    <div class="container">
      <div class="row title-bar">
        <div class="col-md-12">
          <h1 class="wow fadeInUp">Sejarah</h1>
          <div class="heading-border"></div>
          <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-top: -150px">{!! str_limit($sejarah->sejarah, 500) !!}</p>
          <div class="title-but"><a href="{{ route('sejarah') }}"><button class="btn btn-general btn-green" role="button">Read More</button></a></div>
        </div>
      </div>
    </div>
    <!-- About right side withBG parallax -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 bg-chathams">
          <div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">
            <i class="fa fa-circle-o-notch"></i>
            <h5>VISI</h5>
            <p class="desc">Terciptanya iklim usaha yang baik dalam rangka mewujudkan pembangunan nasional secara nyata.</p>
          </div>
        </div>
        <div class="col-md-6 bg-matisse">
          <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
            <i class="fa fa-hourglass-o"></i>
            <h5>MISI</h5>
            <p class="desc">
              <ul  style="text-align: left; color:white;">
                <li>Meningkatkan daya juang dan daya saing Perusahaan/ Pengusaha Indonesia.</li>  
                <li>Mewujudkan Ketenagakerjaan dan Hubungan Industrial yang harmonis, dinamis serta berkeadilan.</li>
                <li>Melindungi, memberdayakan dan membela seluruh pelaku usaha Indonesia terutama anggota.</li>
                <li>Merepresentasikan dunia usaha Indonesia di berbagai lembaga Nasional dan Internasional dan secara khusus di dalam Lembaga Ketenagakerjaan.</li>
            </ul>
          </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====================================================
                        CLIENT
  ======================================================-->
  <div class="row title-bar">
    <div class="col-md-12">
      <h1 class="wow fadeInUp">Struktur Pengurus</h1>
      <div class="heading-border"></div>
    </div>
  </div>
  <section id="home-shop" style="margin: -5% 0 10% 0;">
    <div id="carouselExampleIndicators" class="carousel slide carousel-width" data-ride="carousel" style="width: 100%;">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <a href="{{ asset('storage/images/struktur-pengurus-apindo.png') }}" target="_blank">
          <div class="carousel-item active" style="background-image: url({{ asset('storage/images/struktur-pengurus-apindo.png') }}); height: 1200px;">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </a>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!--====================================================
                     WHAT WE DO
======================================================-->
  <section class="what-we-do bg-gradiant">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <h3>Program Kerja</h3>
          <div class="heading-border-light"></div>
          <p class="desc">susunan daftar kegiatan yang dirancang untuk di laksanakan dalam satu periode kepengurusan.</p>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-4  col-sm-6">
              <div class="what-we-desc">
                <i class="fa fa-briefcase"></i>
                <h6>Hubungan Indsutrial</h6>
                <p class="desc">Kesejahteraan Pekerja dan Jaminan Sosial mempunyai tugas melaksanakan perumusan kebijakan teknis.</p>
              </div>
            </div>
            <div class="col-md-4  col-sm-6">
              <div class="what-we-desc">
                <i class="fa fa-spinner"></i>
                <h6>Pelatihan</h6>
                <p class="desc">Untuk melatih melatih para pengusaha baru dibidangnya untuk bergabung dengan APINDO. </p>
              </div>
            </div>
            <div class="col-md-4  col-sm-6">
              <div class="what-we-desc">
                <i class="fa fa-dollar"></i>
                <h6>Pengupahaan</h6>
                <p class="desc">Terciptanya sistem pengupahan yang kompetitif dan berkeadilan.</p>
              </div>
            </div>
            <div class="col-md-4  col-sm-6">
              <div class="what-we-desc">
                <i class="fa fa-group"></i>
                <h6>Humas</h6>
                <p class="desc">proses berkesinambungan dari usaha-usaha manajemen agar bisa mendapatkan itikad baik dan pengertian dari para pelanggan, karyawan, dan publik secara umum.</p>
              </div>
            </div>
            <div class="col-md-4  col-sm-6">
              <div class="what-we-desc">
                <i class="fa fa-hourglass-2"></i>
                <h6>UMKM</h6>
                <p class="desc">usaha yang punya peranan penting dalam perekonomian negara Indonesia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====================================================
                      STORY
======================================================-->
  <section id="about" class="about" style="margin: 10px 0"> 
    <!-- About right side withBG parallax -->
    <div class="container-fluid">
      <div class="row">
        <a href="{{ route('informasi_anggota') }}" class="col-md-6" style="background-color: #17a2b8">
          <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
            <p class="desc">Keanggotaan DPK Apindo Jakarta Timur</p>
          </div>
        </a>
        <a href="{{asset('file/Formulir Keanggotaan APINDO DPK Jaktim.pdf')}}" class="col-md-6" style="background-color: #28a745">
          <div class="about-content-box wow fadeInUp" data-wow-delay="0.7s">
            <p class="desc">Download Formulir Keanggotan</p>
          </div>
        </a>
      </div>
    </div>
  </section>


@include('layouts.footer')