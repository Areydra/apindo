@include('layouts.header')
@include('layouts.menu')
<section id="contact-p1" class="contact-p1">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="contact-p1-cont">
              <h3>Hubungi Kami</h3>
              <div class="heading-border-light"></div> 
                {!! $hubungi_kami_teks->teks !!}
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="{{ asset('storage/images/'. $hubungi_kami_teks->gambar) }}" target="_blank">
                  <img src="{{ asset('storage/images/'. $hubungi_kami_teks->gambar) }}" alt="" style="width: 100%; height: 250px;">
                </a>
              </div>
              <div class="col-md-6">
                <a href="{{ asset('storage/images/'. $hubungi_kami_teks->gambar2) }}" target="_blank">
                  <img src="{{ asset('storage/images/'. $hubungi_kami_teks->gambar2) }}" alt="" style="width: 100%; height: 250px;">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="contact-p1-cont2"> 
              <address class="address-details-f">
                <h3>Kantor Sekretariat</h3>
                {!! $kantor_sekretariat->alamat !!}
                Phone: {{ $kantor_sekretariat->no_telepon }} <br>
                Kode Pos  : {{ $kantor_sekretariat->kode_pos }} <br>
                Email: <a href="mailto:infodpkapindojaktim@dpkapindojaktim.com" class="">{{ $kantor_sekretariat->email }}</a>
              </address>
              <address class="address-details-f">
                <h5>Kontak Person</h5>
                {{ $kontak_person->nama }}<br>
                Phone: {{ $kontak_person->no_telepon }}<br>
                Email: <a href="mailto:wulan@dpkapindojaktim.com" class="">{{ $kontak_person->email }}</a>
              </address>
              <ul class="list-inline social-icon-f top-data">
                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="height: 35px; width:35px; line-height: 35px;"></i></a></li> 
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </section>

<!--====================================================
                        CONTACT-P2 
======================================================--> 
    <service class="contact-p2" id="contact-p2">
      <div class="container">
        @if(session('terkirim'))
          <div class="alert alert-info" style="background-color: #2196f3">
            <p style="color: white">{{ session('terkirim') }}</p>
          </div>
        @endif
        <form action="{{ route('hubungi_kami_post') }}" method="POST">
          @csrf
          <div class="row con-form">
            <div class="col-md-4">
              @if ($errors->has('nama_lengkap'))
                    <strong style="color: red">Nama lengkap harus diisi</strong>
              @endif              
              <input type="text" name="nama_lengkap" placeholder="Full Name" class="form-control">
            </div>
            <div class="col-md-4">
              @if ($errors->has('email'))
                    <strong style="color: red">Email harus diisi</strong>
              @endif              
              <input type="text" name="email" placeholder="Email Id" class="form-control">
            </div>
            <div class="col-md-4">
              @if ($errors->has('subject'))
                    <strong style="color: red">Subject harus diisi</strong>
              @endif              
              <input type="text" name="subject" placeholder="Subject" class="form-control">
            </div>
            <div class="col-md-12">
              @if ($errors->has('isi'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('isi') }}</strong>
                  </span>
              @endif              
              <textarea name="isi" id=""></textarea>
            </div>
            <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" type="submit" role="button">Send</button></div>
          </div>
        </form>
      </div>
    </service>
<!--====================================================
                       MAP
======================================================--> 
    <section id="contact-add">
      <div id="map">
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.524392148936!2d106.90919541326542!3d-6.19432459551568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4b5598db1a7%3A0xeb9fbb842d525af6!2sJl.+Rawa+Terate+III+No.1%2C+RW.9%2C+Jatinegara%2C+Cakung%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta+13930!5e0!3m2!1sid!2sid!4v1550693902099" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
      </div> 
    </section>

@include('layouts.footer')