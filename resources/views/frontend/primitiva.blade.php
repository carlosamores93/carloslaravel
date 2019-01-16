@extends('frontend.layout.layout')


@section('header')
    @include('frontend.includes.header')
@endsection

@section('content')


<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Generador de números al azar para la primitiva</h1>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->



<section class="single-post" style="padding-top:  0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 hidden-xs text-center" style="margin-top: 5%;">
                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-eu.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=amorescarlos9-21&m=amazon&o=30&p=8&l=as1&IS2=1&asins=B07CMR8PC9&linkId=fa58ef1bc6da6a858094912d235434a0&bc1=000000&lt1=_blank&fc1=ff0000&lc1=080808&bg1=ffffff&f=ifr">
                </iframe>
            </div>

            <div class="col-md-8 col-xs-12">
                <div class="post-img text-center">

                    <h2> Combinación aleatoria para la primitiva</h2>
                </div>
                <div class="post-content">
                    <p>
                        Con el Generador de Números de la Primitiva podrás obtener tantas combinaciones como quieras de manera totalmente aleatoria. Simplemente presiona el botón "Generar Números" y en el momento que obtengas el conjunto de números deseados.
                    </p>
                    <blockquote>
                        Generamos los 6 numeros aleatorios y el reintegro
                    </blockquote>

                    <div class="text-center">
                        <ul>
                            @foreach ($numeros as $element)
                                <li style="display: inline;text-align: center;margin: 0 10px 0 0;border:  solid rgba(0,0,0,.16);border-radius:  50%;font-size:  40px;padding: 5px; color: #339900;">{{ str_pad($element, 2, '0', STR_PAD_LEFT) }}</li>
                            @endforeach
                        </ul>

                        <br>
                        <br>
                        <a href="{{ route('primitiva') }}" class="btn btn-primary btn-lg" style="background-color: #339900;">
                            Generar números
                        </a>
                    </div>




                    
                </div>
                
            </div>

            <div class="col-md-2 col-xs-12 text-center" style="margin-top: 5%;">
                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-eu.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=amorescarlos9-21&m=amazon&o=30&p=8&l=as1&IS2=1&asins=B07CMR8PC9&linkId=fa58ef1bc6da6a858094912d235434a0&bc1=000000&lt1=_blank&fc1=ff0000&lc1=080808&bg1=ffffff&f=ifr">
                </iframe>
            </div>


        </div>


    </div>
</section>   


@endsection

@section('footer')
    @include('frontend.includes.footer')
@endsection
