@include('layouts.header')
@include('layouts.menu')
<section id="about-p1">
        <div class="container">
            <div class="row" style="margin-bottom: 20px">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h2 style="color: #2196f3">PROGRAM KERJA </h2>
                        <p style="text-align: justify;">Pengurus DPK Apindo  Jakarta Timur, dalam upaya memberikan pelayanan dan informasi kepada Anggota dan calon Anggota Apindo , menyelenggarakan berbagai kegiatan kegiatan yang terbagi dalam 5 program Kerja dibidang :</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">HUBUNGAN INDUSTRIAL</h3>
                        <div class="heading-border" style="width: 60px;height: 10px;background-color: #2196f3;margin: 0 auto 50px auto;"></div>
                        {!! $hubungan_industrial->teks !!}
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5%">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">PELATIHAN </h3>
                        <div class="heading-border" style="width: 60px;height: 10px;background-color: #2196f3;margin: 0 auto 50px auto;"></div>
                        {!! $pelatihan->teks !!}
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5%">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">HUBUNGAN MASYARAKAT </h3>
                        <div class="heading-border" style="width: 60px;height: 10px;background-color: #2196f3;margin: 0 auto 50px auto;"></div>
                        {!! $hubungan_masyarakat->teks !!}
                    </div>
                </div>
            </div>        
            <div class="row" style="margin-top: 5%">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">BIDANG UMKM</h3>
                        <div class="heading-border" style="width: 60px;height: 10px;background-color: #2196f3;margin: 0 auto 50px auto;"></div>
                        {!! $bidang_umkm->teks !!}
                    </div>
                </div>
            </div>        
        </div>
    </section>
@include('layouts.footer')