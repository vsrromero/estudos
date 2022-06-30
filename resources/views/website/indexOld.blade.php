@extends('website.layouts.htmlBody')

@section('title' , $title) <!-- Envia para o layout o título da página -->

@section('bodyContent')

    <h1>Index</h1>

    <!--navbar-->
    @include('website.layouts.partials.navbarCommon')

@endsection
