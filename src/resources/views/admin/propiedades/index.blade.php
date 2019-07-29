@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    VISTA PROPIEDADES
@stop
@section('button_create')
    <a class="btn btn-round btn-primary" href="{{ route('propiedades.create') }}" >Crear</a>
@stop

@section('card_title')
    Propiedades
@stop
@section('table')

    <table class="table">
        <thead>
        <tr>
            <th>Titulo</th>
            {{--<th>Moneda</th>--}}
            <th>Tipo</th>
            <th>Estado</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{ $v->titulo }}</td>
                {{--<td>{{ $v->moneda ? $v->moneda->moneda : '' }}</td>--}}
                <td>{{ $v->propTipo }}</td>
                <td>{{ $v->propEstado }}</td>
                <td><a href="{{ route('propiedades.edit', $v->id) }}"><i class="ft-align-left"></i></a>
                    <a href="javascript:;"
                       onclick="document.getElementById('form-delete-{{ $v->id }}').submit()"><i class="ft-delete"></i></a>
                    <form id="form-delete-{{ $v->id }}"
                          action="{{ route('propiedades.destroy', $v->id) }}" method="post">
                        @method('delete')
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop


