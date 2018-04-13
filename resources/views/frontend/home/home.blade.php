@extends('frontend.layout.layout')


@section('header')
    @include('frontend.includes.header')
@endsection


@section('content')

    @include('frontend.home.components.slider')
    @include('frontend.home.components.about_me')
    @include('frontend.home.components.works')
    {{-- 
    @include('frontend.home.components.feature')
    --}}
@endsection



@section('footer')
    @include('frontend.includes.footer')
@endsection