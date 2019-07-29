@extends('InmoWeb::layouts.app')


@section('content')


    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Contacto</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">Contacto</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-contact-area">
                        <div class="aa-contact-top">
                            <div class="aa-title">
                                <h2>Envienos su mensaje</h2>
                                <span></span>
                                <p>Envienos su consulta.Le respondermos a la brevedad. Los campos son requeridos <strong class="required">*</strong></p>
                            </div>
                            <div class="aa-contact-top-left">
                                <div class="aa-contact-bottom">

                                    <div class="aa-contact-form">
                                        <form class="contactform">
                                            <p class="comment-form-author">
                                                <label for="author">Nombre <span class="required">*</span></label>
                                                <input type="text" name="author" value="" size="30" required="required">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="email" name="email" value="" aria-required="true" required="required">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="subject">Asunto</label>
                                                <input type="text" name="subject">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Mensaje</label>
                                                <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" name="submit" class="aa-browse-btn" value="Enviar ">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="aa-contact-top-right">
                                <h2>Contacto</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae placeat aspernatur aperiam, quisquam voluptas enim tempore ab itaque nam modi eos corrupti distinctio nobis labore dolorum quae tenetur. Sapiente, sequi.</p>
                                <ul class="contact-info-list">
                                    <li> <i class="fa fa-phone"></i> 15-5555-5555</li>
                                    <li> <i class="fa fa-clock-o"></i> Lunes a viernes de 10 a 13 y 17 a 20hs. Sábaods de 9 a 13 hs.</li>
                                    <li> <i class="fa fa-envelope-o"></i> info@caudana-propiedades.com</li>
                                    <li> <i class="fa fa-map-marker"></i> Ramos Mejia - Buenos Aires</li>
                                </ul>
                            </div>
                        </div>
                        <div class="aa-contact-bottom">


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52512.51898955341!2d-58.59316888746643!3d-34.65388374415914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7d93bab75a3%3A0xaafe140bc9dea3db!2sRamos+Mej%C3%ADa%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1561743378269!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



@stop
