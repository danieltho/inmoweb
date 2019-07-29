@extends('InmoWebAdmin::layouts.app')

@section('content')

    <h1>{{ $data->name ?: 'Crear Categoría'  }} </h1>

    <form action="{{ $data->id ? route('categorias.update', $data->id) : route('categorias.store') }}"
          method="post">
        @if ($data->id)
            @method('put')
        @endif

        <div>
            <input type="text" name="name" id="name" value="{{ old('name', $data->name) }}" placeholder="name">
        </div>

        <button type="submit">{{ $data->id ? 'Guardar' : 'Crear' }}</button>
    </form>

@stop
