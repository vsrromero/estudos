{{-- html body --}}
@extends('app.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('app.layouts._partials.navbarApp')


<div class="page-content">
    <div class="page-title-app">
        <h1>Suppliers</h1>
    </div>

    @include('app.layouts._components.suppliersMenu')

    <div class="page-info">
        <div class="search-form">
            <form action="{{ route('app.suppliers.list') }}" method="post">
                @csrf
                <input type="text" name="name" class="black-border" placeholder="Supplier Name">
                <input type="text" name="website" class="black-border" placeholder="website">
                <input type="text" name="country" class="black-border" placeholder="Country">
                <input type="text" name="email" class="black-border" placeholder="email">
                <button type="submit" class="black-border">Search</button>
            </form>
        </div>
    </div>

</div>




@endsection
