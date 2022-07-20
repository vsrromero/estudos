@extends('app.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('app.layouts._partials.navbarApp')


<div class="page-content">
    <div class="page-title-app">
        <h1>List suppliers</h1>
    </div>

    @include('app.layouts._components.suppliersMenu')

    <div class="page-info">
        <div class="search-form">
            {{$list}}
        </div>
    </div>

</div>




@endsection
