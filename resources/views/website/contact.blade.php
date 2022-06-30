@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('website.layouts.partials.navbarCommon')


<div class="page-content">
    <div class="page-title">
        <h1>Get in touch</h1>
    </div>

    <div class="page-info">
        <div class="main-contact">
            <form>
                <input type="text" placeholder="Name" class="black-border">
                <br>
                <input type="text" placeholder="Phone" class="black-border">
                <br>
                <input type="text" placeholder="E-mail" class="black-border">
                <br>
                <select class="black-border">
                    <option value="">Main reason of contact</option>
                    <option value="">Doubt</option>
                    <option value="">Complement</option>
                    <option value="">Complaint</option>
                </select>
                <br>
                <textarea class="black-border">Type here your message</textarea>
                <br>
                <button type="submit" class="black-border">SEND</button>
            </form>
        </div>
    </div>
</div>

<div class="mfooter">
    <div class="social-network">
        <h2>Social Network</h2>
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
