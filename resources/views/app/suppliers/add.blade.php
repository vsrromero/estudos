@extends('app.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('app.layouts._partials.navbarApp')


<div class="page-content">
    <div class="page-title-app">
        <h1>Suppliers - Add new supplier</h1>
    </div>

@include('app.layouts._components.suppliersMenu')

    <div class="page-info">
        <div class="search-form">
            <form action="{{ route('app.suppliers.add') }}" method="post">
                @csrf
                <input type="text" name="name" class="black-border" placeholder="Supplier Name">
                <span class="warning">{{$errors->first('name')}}</span>
                <input type="text" name="website" class="black-border" placeholder="website">
                <span class="warning">{{$errors->first('website')}}</span>
                <input type="text" name="country" class="black-border" placeholder="Country">
                <span class="warning">{{$errors->first('country')}}</span>
                <input type="text" name="email" class="black-border" placeholder="email">
                <span class="warning">{{$errors->first('email')}}</span>
                <button type="submit" class="black-border">Add</button>
            </form>
        </div>
    </div>

</div>




@endsection
