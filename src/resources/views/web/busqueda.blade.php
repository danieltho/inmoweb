@extends('InmoWeb::layouts.app')


@section('content')


    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>lISTADO PROPIEDADES</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">HOME</a></li>
                            <li class="active">PROPIEDADES</li>
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

                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>BUSCADOR PROPIEDADES</h3>
                            <form action="">

                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Tipo de propiedad</option>
                                        <option value="1">Departamento</option>
                                        <option value="2">Casa</option>
                                        <option value="3">PH</option>
                                        <option value="4">local comercial</option>
                                        <option value="5">Cochera</option>

                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Venta</option>
                                        <option value="1">Alquiler</option>
                                        <option value="2">Alquiler Temporal</option>
                                    </select>
                                </div>

                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Escribe ubicacion">
                                </div>

                                <div class="aa-single-filter-search">
                                    <span>Precio (USS - dolares)</span>
                                    <span>Desde</span>
                                    <span id="skip-value-lower" class="example-val">25.00</span>
                                    <span>Hasta</span>
                                    <span id="skip-value-upper" class="example-val">1000000</span>
                                    <div id="aa-sqrfeet-range"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                                <div class="aa-single-advance-search">
                                    <input type="submit" value="Buscar" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                        <!-- Start Single properties sidebar -->

                        <!-- Start single sidebar -->
                        <div class="aa-blog-sidebar-single">
                            <div class="aa-banner-ads">
                                <a href="#">
                                    <img src="{{ url('vendor/inmoweb') }}/img/banner-ads.jpg" alt="banner img">
                                </a>
                            </div>
                        </div>


                    </aside>
                </div>


                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- start properties content head -->
                        <div class="aa-properties-content-head">
                            <div class="aa-properties-content-head-left">
                                <label for="">VISTAS</label>
                                <!--  <form action="" class="aa-sort-form">
                                   <label for="">Sort by</label>
                                   <select name="">
                                     <option value="1" selected="Default">Default</option>
                                     <option value="2">Name</option>
                                     <option value="3">Price</option>
                                     <option value="4">Date</option>
                                   </select>
                                 </form>
                                 <form action="" class="aa-show-form">
                                   <label for="">Show</label>
                                   <select name="">
                                     <option value="1" selected="12">6</option>
                                     <option value="2">12</option>
                                     <option value="3">24</option>
                                   </select>
                                 </form>-->
                            </div>
                            <div class="aa-properties-content-head-right">
                                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <!-- Start properties content body -->
                        <div class="aa-properties-content-body">
                            <ul class="aa-properties-nav">
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="properties-detail.html" class="aa-properties-item-img">
                                            <img src="{{ url('vendor/inmoweb') }}/img/item/1.jpg" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            Venta
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>Departamento</span>
                                                <span>Ramos Mejia - GBA</span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3><a href="properties-detail.html">2 Amb. a Estrenar</a></h3>
                                                <p>hermoso depto en centro de Ramos Mejia, con balcon, cocina y baño con
                                                    detalles de categoria, digno de ver!, todo luz! Apto Credito</p>
                                            </div>
                                            <div class="aa-properties-detial">
                    <span class="aa-price">
                      $95000
                    </span>
                                                <a href="properties-detail.html" class="aa-secondary-btn">Ver Más</a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="properties-detail.html" class="aa-properties-item-img">
                                            <img src="{{ url('vendor/inmoweb') }}/img/item/2.jpg" alt="img">
                                        </a>
                                        <div class="aa-tag for-rent">
                                            Alquiler
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>Departamento</span>
                                                <span>Haedo - GBA</span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3><a href="properties-detail.html">Monoambiente dividido</a></h3>
                                                <p>Coqueto monoambiente dividido. Con Balcon frances, a mts de la
                                                    estacion de Haedo. Bajas Expensas. Acepta seguro de caucion.
                                                    Finaer.</p>
                                            </div>
                                            <div class="aa-properties-detial">
                    <span class="aa-price">
                      $6000
                    </span>
                                                <a href="properties-detail.html" class="aa-secondary-btn">Ver Más</a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="properties-detail.html" class="aa-properties-item-img">
                                            <img src="{{ url('vendor/inmoweb') }}/img/item/3.jpg" alt="img">
                                        </a>
                                        <div class="aa-tag sold-out">
                                            Alquiler temporal
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>PH</span>
                                                <span>San Bernardo - P. de la Costa</span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3><a href="properties-detail.html">PH 2 amb. por dia/sem/mes</a></h3>
                                                <p>Alquiler para remporada vaciones inviernos, por dia, seman y mes. PH
                                                    2 amb. a 1 cuadra de la playa y mts. del centro</p>
                                            </div>
                                            <div class="aa-properties-detial">
                    <span class="aa-price">
                      $2000
                    </span>
                                                <a href="properties-detail.html" class="aa-secondary-btn">Ver Más</a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="properties-detail.html" class="aa-properties-item-img">
                                            <img src="{{ url('vendor/inmoweb') }}/img/item/4.jpg" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            Venta
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>Casa</span>
                                                <span>Almagro - CABA </span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3><a href="properties-detail.html">Duplex 3 amb.</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
                                                    molestiae vero ducimus quibusdam odit vitae.</p>
                                            </div>
                                            <div class="aa-properties-detial">
                    <span class="aa-price">
                      U$S 150000
                    </span>
                                                <a href="properties-detail.html" class="aa-secondary-btn">Ver Más</a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="properties-detail.html" class="aa-properties-item-img">
                                            <img src="{{ url('vendor/inmoweb') }}/img/item/1.jpg" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            Venta
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>Departamento</span>
                                                <span>Ramos Mejia - GBA</span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3><a href="properties-detail.html">2 Amb. a Estrenar</a></h3>
                                                <p>hermoso depto en centro de Ramos Mejia, con balcon, cocina y baño con
                                                    detalles de categoria, digno de ver!, todo luz! Apto Credito</p>
                                            </div>
                                            <div class="aa-properties-detial">
                    <span class="aa-price">
                      $95000
                    </span>
                                                <a href="properties-detail.html" class="aa-secondary-btn">Ver Más</a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="aa-properties-item">
                                        <a href="properties-detail.html" class="aa-properties-item-img">
                                            <img src="{{ url('vendor/inmoweb') }}/img/item/1.jpg" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            Venta
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>Departamento</span>
                                                <span>Ramos Mejia - GBA</span>
                                            </div>
                                            <div class="aa-properties-about">
                                                <h3><a href="properties-detail.html">2 Amb. a Estrenar</a></h3>
                                                <p>hermoso depto en centro de Ramos Mejia, con balcon, cocina y baño con
                                                    detalles de categoria, digno de ver!, todo luz! Apto Credito</p>
                                            </div>
                                            <div class="aa-properties-detial">
                    <span class="aa-price">
                      $95000
                    </span>
                                                <a href="properties-detail.html" class="aa-secondary-btn">Ver Más</a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                        <!-- Start properties content bottom -->
                        <div class="aa-properties-content-bottom">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- / Properties  -->

@stop
