<div class="col-md-6">
    <div class="block">
        <h1 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contactar conmigo</h1>
        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            Formulario de contacto.
        </p>
        <div class="contact-form">


            <form id="contact-form" method="#" action="#" role="form">
    
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">


                    <input type="text" placeholder="Nombre y apellidos" class="form-control" name="name" id="name">
                </div>
                
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">


                    <input type="email" placeholder="Correo electrónico" class="form-control" name="email" id="email" >
                </div>
                
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">


                    <input type="text" placeholder="Asunto" class="form-control" name="subject" id="subject">
                </div>
                
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">


                    <textarea rows="6" placeholder="Mensaje" class="form-control" name="message" id="message"></textarea>    
                </div>
                

                {{-- Blade con una condicion --}}
                <div id="success" class="success">
                    Thank you. The Mailman is on His Way :)
                </div>
                
                <div id="error" class="error">
                    Sorry, don't know what happened. Try later :(
                </div>


                
                
                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                    <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Enviar mensaje">
                </div>                      
            </form>
        </div>
    </div>
</div>
