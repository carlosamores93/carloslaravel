@extends('frontend.layout.layout')


@section('header')
    @include('frontend.includes.header')
@endsection

@section('content')

    @include('frontend.contact.components.breadcrumb_contact')
    @include('frontend.contact.components.contact_find')

@endsection

@section('footer')
    @include('frontend.includes.footer')
@endsection