@extends('theme.base')

@section('content')
    <div class="continer py-5 text-center">
        <h1>Hola CTM</h1>
        <a href="{{ route('client.index', ['id' => 1]) }}" class="btn btn-success">Clientes</a>
    </div>
@endsection
