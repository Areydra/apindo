@include('layouts.header')
@include('layouts.menu')

    <section id="single-news-p1" class="single-news-p1">
      <div class="container"  style="margin-top: 20px;">
        <div class="row">

          <!-- left news details -->
          <div class="col-md-8">
            <div class="single-news-p1-cont">
                <div class="single-news-desc">
                    <h3>{{ $data->judul }}</h3>
                    <ul class="list-inline">
                        <li>Posted: <span class="text-theme-colored2"> {{ date('d M Y', strtotime($data->created_at)) }}</span></li>
                        <li>By: <span class="text-theme-colored2">Admin</span></li>
                    </ul>
                <div class="single-news-img text-center">
                    <img src="{{ asset('storage/images/'. $data->gambar) }}" alt="" class="img-fluid" width="500px">
                </div>
                <hr>
                <div class="bg-light-gray">
                    <p>{!! $data->artikel !!}</p>
                </div>
              </div>
            </div>  
            <hr>
          </div>

          <!-- Right news details -->
          <div class="col-md-4">
            <div class="ad-box-sn"> 
              <h3 class="pb-2">Berita Terbaru</h3>       
              @foreach($artikel_baru as $ab)
              <div class="card">
                <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <div class="caption">
                      <i class="fa fa-chain"></i>
                    </div>
                    @if($ab->gambar)
                      <img src="{{ asset('storage/images/'. $ab->gambar) }}" class="img-fluid" alt="...">
                    @endif
                </div>
                <h3>{{ $ab->judul }}</h3>
                <p class="desc">{!! str_limit($ab->artikel,100) !!}</p>
                <a href="{{ route('artikel_detail', $ab->slug) }}"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
                </div>
              </div>
              @endforeach
            </div>
          </div> 
        </div>
      </div>
    </section>
@include('layouts.footer')
