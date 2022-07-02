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
            @component('website.layouts.components.contactForm')

            @endcomponent
        </div>
    </div>
</div>

@include('website.layouts.partials.footerCommon')

@endsection
