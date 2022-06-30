@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('website.layouts.partials.navbarCommon')


<div class="emphasis-content">

    <div class="left">
        <div class="info">
            <h1>Power management</h1>
            <p>The ideal software for your business management.<p>
            <div class="call">
                <img src="/assets/img/check.png">
                <span class="white-text">Easy and complete management.</span>
            </div>
            <div class="call">
                <img src="/assets/img/check.png">
                <span class="white-text">Your business everywhere - Go cloud</span>
            </div>
        </div>

        <div class="video">
            <img src="/assets/img/player_video.jpg">
        </div>
    </div>

    <div class="right">
        <div class="contact">
            <h1>Contact</h1>
            <p>Any doubt? Get in touch with our team.<p>
            <form>
                <input type="text" placeholder="Name" class="white-border">
                <br>
                <input type="text" placeholder="Phone" class="white-border">
                <br>
                <input type="text" placeholder="E-mail" class="white-border">
                <br>
                <select class="white-border">
                    <option value="">Main reason of contact</option>
                    <option value="">Doubt</option>
                    <option value="">Complement</option>
                    <option value="">Complaint</option>
                </select>
                <br>
                <textarea class="white-border">Type here your message</textarea>
                <br>
                <button type="submit" class="white-border">SEND</button>
            </form>
        </div>
    </div>
</div>

@endsection
