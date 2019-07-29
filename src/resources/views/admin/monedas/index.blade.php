@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    VISTA MONEDAS
@stop
@section('button_create')
    <a class="btn btn-round btn-primary" href="{{ route('monedas.create') }}" >Crear</a>
@stop

@section('card_title')
    Monedas
@stop
@section('table')

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $v)
            <tr>
                <td>{{ $v->prefix }}</td>
                <td>{{ $v->name }}</td>
                <td><a href="{{ route('monedas.edit', $v->id) }}"><i class="ft-align-left"></i></a>
                    <a href="javascript:;" onclick="document.getElementById('form-delete-{{ $v->id }}').submit()"><i class="ft-delete"></i></a>
                    <form id="form-delete-{{ $v->id }}" action="{{ route('monedas.destroy', $v->id) }}" method="post">
                        @method('delete')
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop














