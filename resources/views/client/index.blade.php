@extends('theme.base')

@section('content')
    <div class="continer py-5 text-center">
        <h1>Listado de Clientes</h1>
        <a href="{{ route('client.create') }}" class="btn btn-success">CrearClientes</a>

        @if (Session::has('mensaje'))
            <div class="alert alert-info my-5">
                {{ Session::get('mensaje') }}
            </div>
        @endif


        <table class="table">
            <thead>
                <th>NOmbre</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @forelse ($clients as $detail)
                    <tr>
                        <td>{{ $detail->name }}</td>
                        <td>{{ $detail->due }}</td>
                        <td>
                            <a href="{{ route('client.edit', $detail) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('client.destroy', $detail) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">NO hay registros</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        @if ($clients->count())
            {{ $clients->links() }}
        @endif


    </div>
@endsection
