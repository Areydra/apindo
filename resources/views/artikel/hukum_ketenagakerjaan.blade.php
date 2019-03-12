@include('layouts.header')
@include('layouts.menu')

    <section id="news-p1" class="news-p1">
      <div class="container">
        <div class="row">
          <div class="card-columns">
            @foreach($hukum_ketenagakerjaan as $hk)
            @php 
              $limit = rand(10, 200);
            @endphp
              <div class="card">
                <div class="desc-comp-offer-cont">
                <div class="thumbnail-blogs">
                    <div class="caption">
                      <i class="fa fa-chain"></i>
                    </div>
                    @if($hk->gambar)
                      <img src="{{ asset('storage/images/'. $hk->gambar) }}" class="img-fluid" alt="...">
                    @endif
                </div>
                <h3>{{ $hk->judul }}</h3>
                <p class="desc">{!! str_limit($hk->artikel, $limit) !!}</p>
                <a href="{{ route('artikel_detail', $hk->slug) }}"><i class="fa fa-arrow-circle-o-right"></i> Selanjutnya</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
@include('layouts.footer')