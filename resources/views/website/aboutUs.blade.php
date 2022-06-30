@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('website.layouts.partials.navbarCommon')

<div class="page-content">
    <div class="page-title">
        <h1>Power management</h1>
    </div>

    <div class="page-info">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus ex at elit aliquet aliquam. Curabitur porta id ex in.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices urna eget rutrum sagittis!</p>
        <p>Generated with <a href="https://www.lipsum.com/" target="blank"> Lorem Ipsum</a></p>
    </div>
</div>

<div class="mfooter">
    <div class="social-network">
        <h2>Redes sociais</h2>
        <img src="assets/img/facebook.png">
        <img src="assets/img/linkedin.png">
        <img src="assets/img/youtube.png">
    </div>
    <div class="area-contact">
        <h2>Contact</h2>
        <span>+44 0151 924 7373</span>
        <br>
        <span>vromero@vromero.co.uk</span>
    </div>
    <div class="location">
        <h2>Find us</h2>
        <img src="assets/img/mapa.png">
    </div>
</div>

@endsection
