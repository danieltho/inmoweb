@extends('InmoWeb::layouts.app')


@section('content')


    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Detalle de propiedad</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">depto seleccionado</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-properties-content">
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <div class="aa-properties-details-img">
                                <img src="{{ url('vendor/inmoweb') }}/img/slider/1.jpg" alt="img">
                                <img src="{{ url('vendor/inmoweb') }}/img/slider/2.jpg" alt="img">
                                <img src="{{ url('vendor/inmoweb') }}/img/slider/3.jpg" alt="img">
                            </div>
                            <div class="aa-properties-info">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, alias!</h2>
                                <span class="aa-price">$65000</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae voluptatibus veniam non voluptate, ipsa eius magni aliquid ratione sit, odio reprehenderit in quis repudiandae dolor.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur, veritatis, ducimus in aliquam magnam voluptatibus ullam libero fugiat temporibus at, aliquid explicabo placeat eligendi, assumenda magni saepe eius consequuntur.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dicta aliquid, autem, cum, impedit nostrum, rem molestias quisquam ab iure enim totam? Itaque esse ut adipisci officiis nulla repellendus ratione dolore, iste ex doloribus tenetur eos provident quam quasi maxime.</p>
                                <h4>detalles</h4>
                                <ul>
                                    <li>2 habitaciones</li>
                                    <li>1 baño completo</li>
                                    <li>cocina separada</li>
                                    <li>balcon amplio</li>
                                    <li>cochera</li>
                                    <li>SUM</li>

                                </ul>
                                <h4>Video propiedad</h4>
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0" allowfullscreen></iframe>
                                <h4>Mapa</h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6564.808471126498!2d-58.56684032377625!3d-34.64449281455958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7d93bab75a3%3A0xaafe140bc9dea3db!2sRamos+Mej%C3%ADa%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1561760929266!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- compartir -->

                            <div class=" col-md-6 aa-properties-social">
                                <ul>
                                    <li>Compartir</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>

                                    <li class="pull-right"><a href="#"><i class="fa fa-print"></i></a></li>
                                </ul>
                            </div>




                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- / Properties  -->



@stop
