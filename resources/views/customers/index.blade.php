@extends('layouts.app')

@section('content')
    <a href="{{ route('customers.create') }}">Crear nuevo Cliente</a>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <a href="{{ route('customers.edit',$customer)  }}">Editar</a> | 
                    <form action="{{route('customers.destroy',$customer)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">

                    </form>
                </td>
            </tr>
            @empty
                <p>No hay registros</p>
            @endforelse
        </tbody>
    </table>
@endsection