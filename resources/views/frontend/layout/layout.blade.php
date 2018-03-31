<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="Carlos Salvador Amores Martínez">
        <meta name="DC.author" content="Carlos Salvador Amores Martínez">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta content="Copyright (c) {{date('Y')}} iAhorro.com" name="copyright">
        <meta content="es-ES" scheme="DCTERMS.URI" name="DC.language">
        <meta content="text/html" name="DC.format">
        <meta content="{{env('APP_URL')}}" scheme="DCTERMS.URI" name="DC.identifier">
        <meta content="es-ES" http-equiv="Content-Language">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico">
        
        <link type="text/plain" href="http://purl.org/dc/elements/1.1/" rel="schema.DC">
        <link type="text/plain" href="http://purl.org/dc/terms/" rel="schema.DCTERMS">

		{{--  SEO title --}}
		@if( isset($a_meta_seo["title"]) )
		    <title> {{ $a_meta_seo['title'] }} </title>
		    <meta name="DC.title" content="{{ $a_meta_seo["title"] }}" >
		@endif

		{{--  SEO Meta description --}}
		@if(isset($a_meta_seo['description']))
		    <meta name="description" content="{{ $a_meta_seo['description'] }}">
		    <meta name="DC.description" content="{{ $a_meta_seo['description'] }}">
		@endif

		{{-- Url canonica --}}
		@if(isset($a_meta_seo['canonical']))
		    <link rel="canonical" href="{{ $a_meta_seo['canonical'] }}" />
		@endif

		{{--  Paginación SEO --}}
		@if (isset($a_meta_seo['relprev']))
		    <link rel="prev" href="{{ $a_meta_seo['relprev'] }}" >
		@endif
		@if (isset($a_meta_seo['relnext']))
		    <link rel="next" href="{{ $a_meta_seo['relnext'] }}" >
		@endif

		{{-- Robot --}}
		@if(isset($a_meta_seo['robots']))
		    <meta name="robots" content="{{ $a_meta_seo['robots'] }}">
		@endif

        
       
        <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/plugins/ionicons/ionicons.min.css">
        <link rel="stylesheet" href="/plugins/animate-css/animate.css">
        <link rel="stylesheet" href="/plugins/slider/slider.css">
        <link rel="stylesheet" href="/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/plugins/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="/plugins/facncybox/jquery.fancybox.css">
        <link rel="stylesheet" href="/css/style.css">

        {{-- 
        <link rel="stylesheet" href="{{ mix('/css/all.css') }}">
        --}}


        {{-- Global site tag (gtag.js) - Google Analytics --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115987867-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-115987867-1');
        </script>


    </head>

    <body>


        @yield('header')
        
        @yield('content')
        
        @yield('footer')


    	{{-- Template Javascript Files
    	================================================== --}}
    	{{-- jquery --}}
    	<script src="/plugins/jQurey/jquery.min.js"></script>
    	{{-- Form Validation --}}
        <script src="/plugins/form-validation/jquery.form.js"></script> 
        <script src="/plugins/form-validation/jquery.validate.min.js"></script>
    	{{-- owl carouserl js --}}
    	<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>
    	{{-- bootstrap js --}}
    	<script src="/plugins/bootstrap/bootstrap.min.js"></script>
    	{{-- wow js --}}
    	<script src="/plugins/wow-js/wow.min.js"></script>
    	{{-- slider js --}}
    	<script src="/plugins/slider/slider.js"></script>
    	{{-- Fancybox --}}
    	<script src="/plugins/facncybox/jquery.fancybox.js"></script>
    	{{-- template main js --}}
    	<script src="/js/main.js"></script>
 	</body>
</html>