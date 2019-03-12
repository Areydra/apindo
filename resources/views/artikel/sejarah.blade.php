@include('layouts.header')
@include('layouts.menu')
<section id="about-p1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-p1-cont">
                        <h1>Sejarah</h1>
                        <p style="text-align: justify;">{!! $sejarah->sejarah !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('layouts.footer')