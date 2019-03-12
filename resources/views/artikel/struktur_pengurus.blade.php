@include('layouts.header')
@include('layouts.menu')
<style>
  .card-shadow{
    margin: 10px; -webkit-box-shadow: 3px 4px 32px -3px rgba(145,145,145,0.81);
    -moz-box-shadow: 3px 4px 32px -3px rgba(145,145,145,0.81);
    box-shadow: 3px 4px 32px -3px rgba(145,145,145,0.81);
  }
</style>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-12" style="margin-top: 50px;">
        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">STRUKTUR ORGANISASI</h3>
        <div class="heading-border" style="width: 150px;height: 10px;background-color: #2196f3;margin: 0 auto 50px auto;"></div>

        <div class="row justify-content-md-center">
            @foreach($struktur_pengurus as $struktur)
              <div class="card" style="width: 18rem; margin: 10px; border: none;">
                <img src="{{ asset('storage/images/'. $struktur->gambar) }}" class="card-img-top" alt="..." height="250px">
                <div class="card-body">
                  <h6 class="text-center card-title">{{ $struktur->nama }}</h6>
                  <p class="text-center card-text">{{ $struktur->jabatan }}</p>
                </div>
              </div>
            @endforeach
        </div>
     </div>
  </div>
</div>
@include('layouts.footer')