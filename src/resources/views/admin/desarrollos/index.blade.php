@extends('InmoWebAdmin::common.lists')
@section('vista_title')
    VISTA DESARROLLOS
@stop
@section('button_create')
    <a class="btn btn-round btn-primary" href="{{ route('desarrollos.create') }}" >Crear</a>
@stop

@section('card_title')
    Desarrollos
@stop
@section('table')

    <table class="table">
        <thead>
        <tr>
            <th>Titulo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $v)
            <tr>

                <td>{{ $v->titulo }}</td>

                <td><a href="{{ route('desarrollos.edit', $v->id) }}"><i class="ft-align-left"></i></a>
                    <a href="javascript:;" onclick="document.getElementById('form-delete-{{ $v->id }}').submit()"><i class="ft-delete"></i></a>
                    <form id="form-delete-{{ $v->id }}" action="{{ route('desarrollos.destroy', $v->id) }}" method="post">
                        @method('delete')
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop





