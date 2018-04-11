@extends('frontend.layout.layout')


@section('header')
    @include('frontend.include.header')
@endsection


@section('content')

    @include('frontend.home.component.slider')
    @include('frontend.home.component.about_me')
    @include('frontend.home.component.works')
    {{-- 
    @include('frontend.home.component.feature')
    --}}
@endsection



@section('footer')
    @include('frontend.include.footer')
@endsection