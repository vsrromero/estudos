@extends('app.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('app.layouts._partials.navbarApp')


<div class="page-content">
    <div class="page-title-app">
        <h1>Suppliers - Add new supplier</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="#">New</a></li>
            <li><a href="#">Search</a></li>
        </ul>
    </div>

    <div class="page-info">
        <div class="search-form">
            <form action="" method="post">
                @csrf
                <input type="text" name="name" class="black-border" placeholder="Supplier Name">
                <input type="text" name="website" class="black-border" placeholder="website">
                <input type="text" name="uf" class="black-border" placeholder="UF">
                <input type="text" name="email" class="black-border" placeholder="email">
                <button type="submit" class="black-border">Search</button>
            </form>
        </div>
    </div>

</div>




@endsection
