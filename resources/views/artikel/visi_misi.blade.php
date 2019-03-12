@include('layouts.header')
@include('layouts.menu')
<section id="about-p1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">VISI</h3>
                        <div class="heading-border" style="width: 60px;
    height: 10px;
    background-color: #2196f3;
    margin: 0 auto 50px auto;"></div>
                        {!! $visi_misi->visi !!}
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5%">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center">MISI</h3>
                        <div class="heading-border" style="width: 60px;
    height: 10px;
    background-color: #2196f3;
    margin: 0 auto 50px auto;"></div>
                        {!! $visi_misi->misi !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('layouts.footer')