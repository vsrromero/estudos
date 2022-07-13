@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('website.layouts._partials.navbarCommon')


<div class="emphasis-content">

    <div class="left">
        <div class="info">
            <h1>Power management</h1>
            <p>The ideal software for your business management.<p>
            <div class="call">
                <img src="{{ asset('img/check.png') }}">
                <span class="white-text">Easy and complete management.</span>
            </div>
            <div class="call">
                <img src="{{ asset('img/check.png') }}">
                <span class="white-text">Your business everywhere - Go cloud</span>
            </div>
        </div>

        <div class="video">
            <img src="{{ asset('img/player_video.jpg') }}">
        </div>
    </div>

    <div class="right">
        <div class="contact">
            <h1>Contact</h1>
            <p>Any doubt? Get in touch with our team.<p>
                @component('website.layouts._components.contactForm' , ['contact_reason' => $contact_reason])

                @endcomponent
        </div>
    </div>
</div>

@endsection
