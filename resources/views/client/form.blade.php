@extends('theme.base')

@section('content')
    <div class="continer py-5 text-center">
        @if (isset($client))
            <h1>Editar cliente</h1>
        @else
            <h1>Crear cliente</h1>
        @endif


        @if (isset($client))
            <form action="{{ route('client.update', $client) }}" method="post">
                @method('PUT')
            @else
                <form action="{{ route('client.store') }}" method="post">
        @endif


        @csrf


        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="nombre de cliente"
                value="{{ old('name') ?? @$client->name }}">
            <p class="form-text">Escriba el nombre del cliente</p>
            @error('name')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="due" class="form-label">Saldo</label>
            <input type="number" name="due" class="form-control" placeholder="SAldo del CLiente" step="0.01"
                value="{{ old('due') ?? @$client->due }}">
            <p class="form-text">Escriba el Saldo</p>
            @error('due')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="comments" class="form-label">Comentarios</label>
            <textarea name="comments" id="" cols="30" rows="4" class="form-control"
                value="{{ old('comments') ?? @$client->comments }}"></textarea>
        </div>


        @if (isset($client))
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Editar CLiente</button>
            </div>
        @else
            <div class="mb-3">
                <button type="submit" class="btn btn-info">Guardar CLiente</button>
            </div>
        @endif




        </form>
    </div>
@endsection
