<div class="col-md-6">
    <div class="block">
        <h1 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contactar conmigo</h1>
        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            Formulario de contacto.
        </p>
        <div class="contact-form">

            {{ Form::open(array('route' => 'contact.send.message', 'method' => 'post')) }}
    
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">


                    {{ Form::text('name', null, array('required', 'class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nombre y apellidos'))}}
                    
                </div>
                
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">

                    {{ Form::email('email', null, array('required', 'class' => 'form-control', 'id' => 'email', 'placeholder' => 'Correo electrónico'))}}

                </div>
                
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">

                    {{ Form::text('subject', null, array('required', 'class' => 'form-control', 'id' => 'subject', 'placeholder' => 'Asunto'))}}
                </div>
                
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">

                    {{ Form::textarea('message', null, array('required', 'class' => 'form-control', 'id' => 'message', 'placeholder' => 'Mensaje', 'rows' => 6))}}

                </div>
                
                
                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                    <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Enviar mensaje">
                </div> 

            {{ Form::close() }}

        </div>
    </div>
</div>
