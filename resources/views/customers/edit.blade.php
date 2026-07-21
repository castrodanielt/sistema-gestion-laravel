@extends('layouts.app')
@section('content')
<h1>Editar Cliente</h1>

<a href="{{ route('customers.index') }}">Volver al index</a>
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('customers.update',$customer) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name</label>

    <input
        type="text"
        name="name"
        value="{{old('name'),$customer->name}}"
    >

    <br><br>

    <label>Email</label>

    <input
        type="email"
        name="email"
        value="{{old('email'),$customer->email}}"
    >

    <br><br>

    <label>Phone</label>

    <input
        type="text"
        name="phone" 
        value="{{old('phone'),$customer->phone}}"
    >

    <br><br>

    <button type="submit">
        Actualizar
    </button>
</form>
@endsection