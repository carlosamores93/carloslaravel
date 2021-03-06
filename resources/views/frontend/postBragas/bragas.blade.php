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
                    <h1>El negocio de la bragas usadas</h1>
                    <div class="portfolio-meta">
                        <span> Agosto 2018 </span>|
                        <span> Artículo dedicado a <strong> La Wera </strong>  </span> |
                        <span> Madrid, España</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->

<section class="single-post" style="padding-top:  0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-img text-center">

                    <h2> Como funciona la compra ventas de bragas/tangas usadas</h2>
                    <iframe width="560" height="315" class='video_scroll_tanga' src="https://www.youtube.com/embed/iqTR3NT_vlk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <input type="submit" value="Borrar" id='video_del' class='video_del' style='display: none;'>
                </div>
                <div class="post-content">
                    <p>
                        Vender braguitas usadas, sudadas y manchadas, por 50 euros. Puede parecer extraño, pero es un negocio al alza en España y algunas mujeres ya lo ven como un sobresueldo para ayudarse económicamente o incluso como un trabajo.
                    </p>
                    <blockquote>
                        Si las braguitas se usan tres días seguidos, son 10 al mes. Si cada una se vende por una media de 50 euros, eso son 500. Sólo con braguitas, porque los sujetadores, calcetines o juguetes sexuales también son susceptibles de subastarse.
                    </blockquote>
                    <div class="post-img text-center">
                        <img class="img-responsive" alt="Bragas usadas" src="images/blog/bragas.jpg" style="display:unset;">
                    </div>
                    <p>
                        El fenómeno viene de Japón y en España no para de ganar personas que quieres comprar este tipo de ropa interior. La mayoria de los compradores son hombres fetichistas, que excitan poniéndose las bragas ellos mismos, oliendo-las, o incluso pidiéndole a su pareja que las lleve. Para la mayoría de vendedoras, el gusto por las bragas usadas no es más que una oportunidad para ganar un sobresueldo, pero otros lo ven como una diversión.
                    </p>

                    <p>
                        La pieza que tiene más éxito es un tanga y las embarazadas son las vendedoras que más triunfan. Los precios de las bragas van desde los 30 hasta los 100 euros. La vendedora cuelga fotografías donde se la ve con la ropa interior a la venta y al lado escribe una descripción en la que indica que ha hecho. El cliente que esté interesado debe iniciar un chat con ella para ponerse de acuerdo. En ningún momento hay que revelar la identidad de ninguno de los dos y el envío debe hacerse cde manera que sea de forma anónima.
                    </p>


                    <p>
                        
                        <strong> Si estás intersado/a en la compra de bragas usadas </strong> no dudes en contactarnos al correo <strong> bragaslawera@hotmail.com </strong> y asunto <strong> La Wera y sus braguitas </strong>
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

@section('script')
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.video_scroll_tanga').vscroll();
            $('.video_del').eliminarVideo();
            $('#video_del').click(function(event) {
                $(".video_scroll_tanga").remove();
                $("#video_del").remove();
            });

            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                console.log('Esto es un dispositivo móvil');
                $('.video_scroll_tanga').addClass('img-responsive');
            }

        });
    </script>
@endsection

