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

@include('website.layouts.partials.footerCommon')

@endsection
