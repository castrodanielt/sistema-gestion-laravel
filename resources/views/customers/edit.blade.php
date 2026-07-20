<h1>Editar Cliente</h1>

<a href="{{ route('customers.index') }}">Volver al index</a>
<form action="{{ route('customers.update',$customer) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name</label>

    <input
        type="text"
        name="name"
        value="{{$customer.name}}"
    >

    <br><br>

    <label>Email</label>

    <input
        type="email"
        name="email"
        value="{{$customer.email}}"
    >

    <br><br>

    <label>Phone</label>

    <input
        type="text"
        name="phone" 
        value="{{$customer.phone}}"
    >

    <br><br>

    <button type="submit">
        Actualizar
    </button>
</form>