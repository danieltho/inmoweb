@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    PROPIEDADES
@stop
@section('button_create')

@stop

@section('card_title')
    {{ $data->titulo ?: 'Crear Propiedad'  }}
@stop
@section('card-content')


    <form class="form form-horizontal"
          action="{{ $data->titulo ? route('propiedades.update', $data->id) : route('propiedades.store') }}"
          method="post"
          enctype="multipart/form-data"
    >
        @if ($data->titulo)
            @method('put')
        @endif
        <div class="form-body">
            {{--<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>--}}

            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">Nombre</label>
                <div class="col-md-9">
                    <input class="form-control" name="titulo" id="titulo" value="{{ old('titulo', $data->titulo) }}"
                           placeholder="Nombre">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput2">Descripción</label>
                <div class="col-md-9">
                    <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10"
                              placeholder="descripcion">{{ old('descripcion', $data->descripcion) }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput3">Ruta Youtube</label>
                <div class="col-md-9">
                    <input class="form-control" name="url_video" id="url_video"
                           value="{{ old('url_video', $data->url_video) }}"
                           placeholder="Ruta Youtube">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Moneda</label>
                <div class="col-md-9">
                    <select name="moneda_id" id="moneda">
                        <option value="">Seleccion moneda</option>
                        @foreach($monedas as $v)
                            <option
                                {{ old('moneda_id', $data->moneda_id) != $v->id ?: 'selected'  }} value="{{ $v->id }}">{{ $v->moneda }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput4">Precio</label>
                <div class="col-md-9">
                    <input class="form-control" name="precio_valor" id="precio_valor"
                           value="{{ old('precio_valor', $data->precio_valor) }}" placeholder="precio_valor">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Estado</label>
                <div class="col-md-9">
                    <select name="estado_id" id="estado">
                        <option value="">Seleccion estado</option>
                        @foreach($estados as $v)
                            <option
                                {{ old('estado_id', $data->estado_id) != $v->id ?: 'selected'  }} value="{{ $v->id }}">{{ $v->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Tipo</label>
                <div class="col-md-9">
                    <select name="tipo_id" id="tipo">
                        <option value="">Seleccion tipo</option>
                        @foreach($tipos as $v)
                            <option
                                {{ old('tipo_id', $data->tipo_id) != $v->id ?: 'selected'  }} value="{{ $v->id }}">{{ $v->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Imágenes</label>
                <div class="col-md-9">
                    <input type="file" name="imagenes_propiedad[]" multiple="multiple" class="form-control">
                </div>
            </div>


        </div>
        <div class="form-actions">
            <a href="{{ url('admin/propiedades') }}" class="btn btn-warning mr-1">
                <i class="ft-x"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> {{ $data->titulo ? 'Guardar' : 'Crear' }}
            </button>
        </div>


    </form>

    @if ($galeria->count() > 0)

        <div class="grid-hover row">
            <h5 class="col-12 mt-3">Galería</h5>
            @foreach($galeria as $v)
                <div class="col-md-3 col-12">
                    <figure class="effect-zoe">
                        <img src="{{ Storage::url($v->sourceFile->url) }}" alt="{{ $v->sourceFile->titulo }}"/>
                        <figcaption>

                            <h2>Eliminar</h2>
                            <p class="icon-links">
                                <a href="javascript:;"
                                   onclick="document.getElementById('propiedadMedioDestroy{{ $v->id }}').submit()"
                                   class="mr-1"><i class="ft-delete"></i></a>


                                    <form id="propiedadMedioDestroy{{ $v->id }}"
                                          action="{{ url('admin/propiedad/medio/'.$v->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                    </form>
                            </p>

                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
    @endif
@stop


