
@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    MEDIOS
@stop
@section('button_create')

@stop

@section('card_title')
    Medios
@stop
@section('javascript')
    <script src="{{url('vendor/inmoweb')}}/app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js"
            type="text/javascript"></script>
@stop
@section('card-content')
    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
                <div class="card-header bg-transparent border-0">
                    <h2 class="error-code text-center mb-2">404</h2>
                    <h3 class="text-uppercase text-center">Page Not Found !</h3>
                </div>
                <div class="card-content">
                    <fieldset class="row py-2">
                        <div class="input-group col-12">
                            <input type="text" class="form-control form-control-xl input-xl border-grey border-lighten-1 "
                                   placeholder="Search..." aria-describedby="button-addon2">
                            <span class="input-group-append" id="button-addon2">
                      <button class="btn btn-lg btn-secondary border-grey border-lighten-1" type="button"><i class="ft-search"></i></button>
                    </span>
                        </div>
                    </fieldset>
                    <div class="row py-2">
                        <div class="col-12 col-sm-6 col-md-6">
                            <a href="index.html" class="btn btn-primary btn-block"><i class="ft-home"></i> Back to Home</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <a href="search-website.html" class="btn btn-danger btn-block"><i class="ft-search"></i>  Advanced search</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="row">
                        <p class="text-muted text-center col-12 py-1">© 2016 <a href="#">Stack </a>Crafted with <i class="ft-heart pink"> </i>                    by <a href="http://themeforest.net/user/pixinvent/portfolio"
                                                                                                                                                                        target="_blank">PIXINVENT</a></p>
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                                <span class="fa fa-linkedin font-medium-4"></span>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                                <span class="fa fa-github font-medium-4"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
