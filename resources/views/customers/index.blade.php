@extends('layouts.app')

@section('content')
    <a href="{{ route('customers.create') }}">Crear nuevo Cliente</a>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
            @empty
                <p>No hay registros</p>
            @endforelse
        </tbody>
    </table>
@endsection