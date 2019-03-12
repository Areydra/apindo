@include('layouts.header')
@include('layouts.menu')
@if(session()->has('login'))
    <div class="alert alert-success">
        {{ session()->get('login') }}
    </div>
@endif
<div class="row" style="margin: 0">
  <div class="col-sm-12">
    <marquee>{{ $marquee->teks }}</marquee>
  </div>
</div>
<div class="row" style="margin:10px">
  <div class="col-sm-9">    
    <section id="home-shop" style="margin-bottom: 25px;">
        <div id="carouselExampleIndicators" class="carousel slide carousel-width" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url({{ asset('storage/images/slider/banner.jpg') }}); background-size: 100%">
              <div class="carousel-caption d-none d-md-block">          
              </div>
            </div>
            @foreach($slider as $slide)
            <div class="carousel-item" style="background-image: url({{ asset('storage/images/'.$slide->gambar) }});  max-width:100%;">
              <div class="carousel-caption d-none d-md-block">          
              </div>
            </div>
            @endforeach

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

      <div class="container-post">
          <div class="row">
              <div class="col-sm-4">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Bisnis dan Industri </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($serikat_pekerja as $sp)
                      @if(empty($sp->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $sp->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $sp->slug }}">{{ $sp->judul }}</a></h4>
                                <div>
                                    {!! str_limit($sp->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($sp->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $sp->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $sp->slug }}"><img
                                            src="{{ asset('storage/images/'.$sp->gambar) }}" alt="{{ $sp->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $sp->slug }}">{{ $sp->judul }}</a></h4>
                                <div>
                                    {!! str_limit($sp->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($sp->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
              <div class="col-sm-4">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Pengembangan SDM </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($sdm as $sd)
                      @if(empty($sd->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $sd->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $sd->slug }}">{{ $sd->judul }}</a></h4>
                                <div>
                                    {!! str_limit($sd->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($sd->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $sd->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $sd->slug }}"><img
                                            src="{{ asset('storage/images/'.$sd->gambar) }}" alt="{{ $sd->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $sd->slug }}">{{ $sd->judul }}</a></h4>
                                <div>
                                    {!! str_limit($sd->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($sd->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
              <div class="col-sm-4">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Hukum dan Ketenagakerjaan </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($hukum_ketenagakerjaan as $hk)
                      @if(empty($hk->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $hk->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $hk->slug }}">{{ $hk->judul }}</a></h4>
                                <div>
                                    {!! str_limit($hk->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($hk->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $hk->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $hk->slug }}"><img
                                            src="{{ asset('storage/images/'.$hk->gambar) }}" alt="{{ $hk->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $hk->slug }}">{{ $hk->judul }}</a></h4>
                                <div>
                                    {!! str_limit($hk->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($hk->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
      <div class="container-post">
          <div class="row">
              <div class="col-sm-4">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Serikat Pekerja dan Buruh </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($serikat_pekerja as $sp)
                      @if(empty($sp->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $sp->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $sp->slug }}">{{ $sp->judul }}</a></h4>
                                <div>
                                    {!! str_limit($sp->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($sp->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $sp->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $sp->slug }}"><img
                                            src="{{ asset('storage/images/'.$sp->gambar) }}" alt="{{ $sp->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $sp->slug }}">{{ $sp->judul }}</a></h4>
                                <div>
                                    {!! str_limit($sp->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($sp->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
              <div class="col-sm-4">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  LKS Tripartite </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($lks as $lk)
                      @if(empty($lk->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $lk->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $lk->slug }}">{{ $lk->judul }}</a></h4>
                                <div>
                                    {!! str_limit($lk->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($lk->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $lk->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $lk->slug }}"><img
                                            src="{{ asset('storage/images/'.$lk->gambar) }}" alt="{{ $lk->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $lk->slug }}">{{ $lk->judul }}</a></h4>
                                <div>
                                    {!! str_limit($lk->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($lk->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
              <div class="col-sm-4">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Informasi Kegiatan anggota </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($informasi_kegiatan as $ik)
                      @if(empty($ik->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $ik->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $ik->slug }}">{{ $ik->judul }}</a></h4>
                                <div>
                                    {!! str_limit($ik->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($ik->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $ik->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $ik->slug }}"><img
                                            src="{{ asset('storage/images/'.$ik->gambar) }}" alt="{{ $ik->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $ik->slug }}">{{ $ik->judul }}</a></h4>
                                <div>
                                    {!! str_limit($ik->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($ik->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
    </div>

  <div class="col-sm-3">    
      <div class="container-post">
          <div class="row-post">
              <div class="col col-4-12-sidebar">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Berita Populer </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($artikel_populer as $ap)
                      @if(empty($ap->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $ap->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $ap->slug }}">{{ $ap->judul }}</a></h4>
                                <div>
                                    {!! str_limit($ap->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($ap->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $ap->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $ap->slug }}"><img
                                            src="{{ asset('storage/images/'.$ap->gambar) }}" alt="{{ $ap->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $ap->slug }}">{{ $ap->judul }}</a></h4>
                                <div>
                                    {!! str_limit($ap->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($ap->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach

                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
      <div class="container-post">
          <div class="row-post">
              <div class="col col-4-12-sidebar">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="">
                                  Visitor </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">
                    <div id="histats_counter" style="margin-top: -90px" class="text-center">
                        <!-- Histats.com  START  (aync)-->
                        <script type="text/javascript">
                                var _Hasync= _Hasync|| [];
                                _Hasync.push(['Histats.start', '1,4226976,4,402,118,80,00011111']);
                                _Hasync.push(['Histats.fasi', '1']);
                                _Hasync.push(['Histats.track_hits', '']);
                                (function() {
                                    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                                    hs.src = ('//s10.histats.com/js15_as.js');
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                                })();
                        </script>
                        <noscript>
                            <a href="/" target="_blank">
                                <img  src="//sstatic1.histats.com/0.gif?4226976&101" alt="myspace tracker" border="0">
                            </a>
                        </noscript>
                        <!-- Histats.com  END  -->
                        <div id="histats_counter_286" style="display: block;">
                            <a href="/" target="_blank">
                                <canvas id="histats_counter_286_canvas" width="119" height="79" style="cursor: pointer;">
                                </canvas>
                            </a>
                        </div>
                    </div> 
                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
      <div class="container-post">
          <div class="row-post">
              <div class="col col-4-12-sidebar">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="http://kemnaker.go.id/berita/berita-naker">
                                  Berita Terbaru </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">

                    @foreach($artikel_terbaru as $ab)
                      @if(empty($ab->gambar))
                        <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $ab->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="text-center"><a href="artikel/{{ $ab->slug }}">{{ $ab->judul }}</a></h4>
                                <div>
                                    {!! str_limit($ab->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($ab->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @else
                         <div class="post clearfix">
                            <div class="item_thumb">
                                <div class="thumb_icon">
                                    <a href="artikel/{{ $ab->slug }}" jquery=""><i class="fa fa-copy"></i></a>
                                </div>
                                <div class="thumb_hover">
                                    <a href="artikel/{{ $ab->slug }}"><img
                                            src="{{ asset('storage/images/'.$ab->gambar) }}" alt="{{ $ab->judul }}" class="visible animated" style="width: 75px; height: 75px"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="artikel/{{ $ab->slug }}">{{ $ab->judul }}</a></h4>
                                <div>
                                    {!! str_limit($ab->artikel, 80) !!}
                                </div>
                                <div class="meta-item clearfix">
                                    <span class="meta_date">{{ date('d M Y', strtotime($ab->updated_at)) }}</span>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
      <div class="container-post">
          <div class="row-post">
              <div class="col col-4-12-sidebar">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Mars Apindo </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">
                      <video width="100%" controls>
                        <source src="{{ asset('storage/videos/Mars Apindo.webm') }}" type="video/webm">
                        Your browser does not support the video tag.
                      </video>
                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
      <div class="container-post">
          <div class="row-post">
              <div class="col col-4-12-sidebar">
                  <div class="panel-title-sidebar">
                      <div>
                          <h4>
                              <a href="#">
                                  Hymne Apindo </a>
                          </h4>
                      </div>
                  </div>

                  <div class="list-post news">
                      <video width="100%" controls>
                        <source src="{{ asset('storage/videos/Hyimne Apindo.webm') }}" type="video/webm">
                        Your browser does not support the video tag.
                      </video>
                  </div><!-- End Post lists -->
              </div>
          </div>
      </div>
  </div>    
</div>
@include('layouts.footer')