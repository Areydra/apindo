@include('layouts.header')
@include('layouts.menu')
    <div id="home-p" class="text-center0" style="margin: 5% 0 -3% 0">
      <div class="container">
        <h3 style="font-weight: 700;color: #2196f3; text-align: center" class="wow fadeInUp" data-wow-delay="0.1s">Galeri Kegiatan Pengurus</h3>
      </div><!--/end container-->
    </div> 
    <section id="news-p1" class="news-p1">
      <div class="container">
        <div class="row">
          <div class="card-columns" style="display: inline-block;">
            @foreach($pictures as $picture)
            <div class="card">
              <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <a href="{{ asset('storage/images/'.$picture->gambar) }}" target="_blank">
                        <div class="caption">
                            <i class="fa fa-chain"></i>
                        </div>
                    </a>
                    <img src="{{ asset('storage/images/'.$picture->gambar) }}" class="img-fluid" alt="...">
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
 @include('layouts.footer')