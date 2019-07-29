@extends('InmoWebAdmin::layouts.app')

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">@yield('vista_title', 'VISTA')</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        {{--<li class="breadcrumb-item"><a href="{{ url('admin') }}">inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Starters Kit</a>
                        </li>--}}
                        <li class="breadcrumb-item active">Inicio</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-6 col-12">
            <div class="btn-group">
                @yield('button_create')

                {{--   <a class="btn btn-round btn-primary " href="{{ route('propiedades.create') }}" ><i class="ft-plus pr-1"></i>
                   </a>--}}
                {{--<div class="dropdown-menu">

                    <a  class="dropdown-item"  href="{{ route('propiedades.create') }}">Crear propiedad</a>--}}
                {{--<a class="dropdown-item" href="#">Anotheraction</a>--}}{{--
                --}}{{--<a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>--}}{{--
            </div>--}}
            </div>
        </div>
    </div>
    <div class="content-body">
        <section class="row">
            <div class="col-sm-12">
                <!-- Kick start -->
                <div id="kick-start" class="card">
                    <div class="card-header">
                        <h4 class="card-title">@yield('card_title')</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                {{-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                 <li><a data-action="close"><i class="ft-x"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">

                               @yield('table')
                               @yield('card-content')
                            </div>
                            @yield('grid')
                        </div>
                    </div>
                </div>
                <!--/ Kick start -->

            </div>
        </section>

    </div>
@stop


