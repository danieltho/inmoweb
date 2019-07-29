@extends('InmoWeb::layouts.app')


@section('content')
    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>la empresa</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">Caudana propiedades</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->


    <!-- About us -->
    <section id="aa-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-about-us-area">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="aa-about-us-left">
                                    <img src="{{ url('vendor/inmoweb') }}/img/about-us.png" alt="image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="aa-about-us-right">
                                    <div class="aa-title">
                                        <h2>Nosotros</h2>
                                        <span></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About us -->




    <section id="aa-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-gallery-area">
                        <div class="aa-title">
                            <h2>Ejemplo de galeria</h2>
                            <span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi commodi eum dolorem aut eos, debitis quaerat reiciendis, officiis consectetur ducimus atque suscipit ab at tempora!</p>
                        </div>
                        <!-- Start gallery -->
                        <div class="aa-gallery-content">

                            <!-- Start gallery image -->
                            <div id="mixit-container" class="aa-gallery-body">
                                <!-- start single gallery image -->
                                <div class="aa-single-gallery mix apartment">
                                    <div class="aa-single-gallery-item">
                                        <div class="aa-single-gallery-img">
                                            <a href="#"><img src="{{ url('vendor/inmoweb') }}/img/gallery/small/1.jpg" alt="img"></a>
                                        </div>
                                        <div class="aa-single-gallery-info">
                                            <a class="fancybox" data-fancybox-group="gallery" href="{{ url('vendor/inmoweb') }}/img/gallery/big/1.jpg"><span class="fa fa-eye">
                      <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- start single gallery image -->
                                <div class="aa-single-gallery mix garage">
                                    <div class="aa-single-gallery-item">
                                        <div class="aa-single-gallery-img">
                                            <a href="#"><img src="{{ url('vendor/inmoweb') }}/img/gallery/small/2.jpg" alt="img"></a>
                                        </div>
                                        <div class="aa-single-gallery-info">
                                            <a class="fancybox" data-fancybox-group="gallery" href="{{ url('vendor/inmoweb') }}/img/gallery/big/2.jpg"><span class="fa fa-eye"></span></a>

                                        </div>

                                    </div>
                                </div>
                                <!-- start single gallery image -->
                                <div class="aa-single-gallery mix livingroom">
                                    <div class="aa-single-gallery-item">
                                        <div class="aa-single-gallery-img">
                                            <a href="#"><img src="{{ url('vendor/inmoweb') }}/img/gallery/small/3.jpg" alt="img"></a>
                                        </div>
                                        <div class="aa-single-gallery-info">
                                            <a class="fancybox" data-fancybox-group="gallery" href="{{ url('vendor/inmoweb') }}/img/gallery/big/3.jpg"><span class="fa fa-eye">

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@stop
