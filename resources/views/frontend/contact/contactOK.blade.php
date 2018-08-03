@extends('frontend.layout.layout')


@section('header')
    @include('frontend.includes.header')
@endsection

@section('content')


    <section class="company-description">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        	<br>
                        	<br>
                        	<br>
                        	<br>
                        	<br>

                        <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Mensaje enviado correctamente</h3>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        	<br>
                        	<br>
                        	<br>
                        	<br>
                        	<br>

                        	En breve se pondrán en contacto con usted.
                        	<br>
                        	<br>
                        	<br>
                        	Muchas gracias.
                        	<br>
                        	<br>
                        	<br>
                        	<br>

                        	<strong>¿Has oido hablar acerca de la compra/venta de bragas usadas?</strong>
                        	<br>
                        	Aquí tienes un artículo por si estas intersado: <a href="{{ env('APP_URL') }}/compra-venta-bragas-usadas.html"> haga click aquí</a>

                        	<br>
                        	<br>
                        	<br>
                        	<br>
                        	<br>
                        	Un saludo ;)
                        	<br>
                        	<br>
                        	<br>
                        	<br>

                        </p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    @include('frontend.includes.footer')
@endsection