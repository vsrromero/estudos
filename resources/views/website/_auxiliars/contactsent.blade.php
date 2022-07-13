@php
    header("refresh:3;url='/'");
@endphp


@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')



    {{-- nav menu --}}
    @include('website.layouts._partials.navbarCommon')


    <div class="page-content">

        <div class="messageSent">
            We got your message! <br> Will get in touch soon.


        </div>

    </div>


    @include('website.layouts._partials.footerCommon')



@endsection

