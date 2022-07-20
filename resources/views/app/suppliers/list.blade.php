@extends('app.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('app.layouts._partials.navbarApp')


<div class="page-content">
    <div class="page-title-app">
        <h1>List suppliers</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="#">New</a></li>
            <li><a href="#">Search</a></li>
        </ul>
    </div>

    <div class="page-info">
        <div class="search-form">
            ... LIST ...
        </div>
    </div>

</div>




@endsection
