@extends('InmoWeb::layouts.app')


@section('content')


    <!-- Start Proerty header  -->
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Detalle emprendimiento</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">nuevo desarrollo</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Blog  -->
    <section id="aa-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-blog-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="aa-blog-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <article class="aa-blog-single aa-blog-details">
                                                <figure class="aa-blog-img">
                                                    <a href="#"><img alt="img" src="{{ url('vendor/inmoweb') }}/img/slider/1.jpg"></a>
                                                    <span class="aa-date-tag">Ramos Mejia</span>
                                                </figure>
                                                <div class="aa-blog-single-content">
                                                    <h2>Lorem ipsum dolor sit amet, consectetur.</h2>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestias eligendi quidem vero alias ea. Accusantium quas soluta recusandae, ducimus voluptates aut, assumenda earum velit, dignissimos repellendus delectus voluptate, labore.</p>
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo consequuntur, impedit aut similique cum.</p>
                                                        <cite>- Mr. josep</cite>
                                                    </blockquote>
                                                    <h1>H1 Title</h1>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                                                    <h2>H2 Title</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                                                    <h3>H3 Title</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                                                    <h4>H4 Title</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, provident.</p>

                                                </div>
                                            </article>
                                        </div>







                                        <!-- Social Share -->
                                        <div class="col-md-12">
                                            <div class="aa-properties-social">
                                                <ul>
                                                    <li>Compartir</li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- post navigation -->
                                        <div class="col-md-12">
                                            <div class="aa-blog-navigation">
                                                <div class="aa-blog-pagination-left">
                                                    <a href="#" class="aa-prev">
                            <span class="fa fa-angle-double-left">
                            </span>
                                                        ANTERIOR
                                                    </a>
                                                </div>
                                                <div class="aa-blog-pagination-right">
                                                    <a href="#" class="aa-next">
                                                        SIGUIENTE
                                                        <span class="fa fa-angle-double-right">
                            </span>
                                                    </a>
                                                </div>
                                            </div>
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
    <!-- / Blog  -->


@stop
