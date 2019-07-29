@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    ESTADOS
@stop
@section('button_create')

@stop

@section('card_title')
    {{ $data->id ?: 'Crear Estado'  }}
@stop
@section('card-content')


    <form class="form form-horizontal" action="{{ $data->id ? route('estados.update', $data->id) : route('estados.store') }}"
          method="post">
        @if ($data->id)
            @method('put')
        @endif
        <div class="form-body">
            {{--<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>--}}

            <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">Nombre</label>
                <div class="col-md-9">
                    <input class="form-control" name="name" id="name" value="{{ old('name', $data->name) }}">
                </div>
            </div>

        </div>
        <div class="form-actions">
            <a href="{{ url('admin/estados') }}" class="btn btn-warning mr-1">
                <i class="ft-x"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> {{ $data->id ? 'Guardar' : 'Crear' }}
            </button>
        </div>


    </form>

@stop
