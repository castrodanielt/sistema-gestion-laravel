<h1>Nuevo Cliente</h1>

<a href="{{ route('customers.index') }}">Volver al index</a>
<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <label>Name</label>

    <input
        type="text"
        name="name"
    >

    <br><br>

    <label>Email</label>

    <input
        type="email"
        name="email"
    >

    <br><br>

    <label>Phone</label>

    <input
        type="text"
        name="phone"
    >

    <br><br>

    <button type="submit">
        Guardar
    </button>
</form>