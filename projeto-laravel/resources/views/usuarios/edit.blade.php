

<h1>Editar Usuário</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $usuario->nome }}"><br><br>
    <input type="email" name="email" value="{{ $usuario->email }}"><br><br>

    <button type="submit">Atualizar</button>
</form>