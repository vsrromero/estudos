@extends('website.layouts.htmlBody')

@section('title' , $title)

@section('bodyContent')

        {{-- nav menu --}}
        @include('website.layouts._partials.navbarCommon')


<div class="page-content">
    <div class="page-title">
        <h1>Sign in</h1>
    </div>
    <div class="page-info">
        <div class="form-login">
            <form action="{{ route('common.login') }}" method="post">
                @csrf
                <input name="user" type="text" placeholder="User" class="black-border" value="{{ old('user') }}">
                <span class="warning">{{$errors->has('user') ? $errors->first('user') : '' }}</span>
                <input name="password" type="password" placeholder="Password" class="black-border">
                <span class="warning">{{$errors->has('password') ? $errors->first('password') : '' }}</span>
                <button type="submit" class="black-border">Sign in</button>
            </form>
            {{ isset($error) && $error != '' ? $error : '' }}
        </div>
    </div>
</div>



@include('website.layouts._partials.footerCommon')

@endsection
