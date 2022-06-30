@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

<div class="top">

    <div class="logo">
        <img src="img/logo.png">
    </div>

    <div class="menu">
        {{-- nav menu --}}
        @include('website.layouts.partials.navbarCommon')
    </div>
</div>

<div class="page-content">
    <div class="page-title">
        <h1>Olá, eu sou o Super Gestão</h1>
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
        <img src="img/facebook.png">
        <img src="img/linkedin.png">
        <img src="img/youtube.png">
    </div>
    <div class="area-contact">
        <h2>contact</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="location">
        <h2>Localização</h2>
        <img src="img/mapa.png">
    </div>
</div>

@endsection
