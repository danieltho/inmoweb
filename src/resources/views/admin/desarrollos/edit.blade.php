@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    DESARROLLOS
@stop
@section('button_create')

@stop

@section('card_title')
    {{ $data->titulo ?: 'Crear Desarrollo'  }}
@stop
@section('card-content')


    <form class="form form-horizontal" action="{{ $data->id ? route('desarrollos.update', $data->id) : route('desarrollos.store') }}"
          method="post">
        @if ($data->id)
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
                    <input class="form-control" name="url_video" id="url_video" value="{{ old('url_video', $data->url_video) }}"
                           placeholder="Ruta Youtube">
                </div>
            </div>


        </div>
        <div class="form-actions">
            <a href="{{ url('admin/desarrollos') }}" class="btn btn-warning mr-1">
                <i class="ft-x"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> {{ $data->titulo ? 'Guardar' : 'Crear' }}
            </button>
        </div>



    </form>

@stop





