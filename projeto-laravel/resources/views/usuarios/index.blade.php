
<h1>Usuarios:</h1>
<div>


    <?php foreach ($usuarios as $u) : ?>

        <p>
            Nome: <?= $u->nome ?> - Email: <?= $u->email ?>

            <a href="/usuarios/<?=$u->id ?>/edit">Editar</a>
            <a href="{{ route('usuarios.destroy', ['id'=>$u->id]) }}">Excluir</a>
        </p>

    <?php endforeach; ?>    


</div>

//===============================================

<h1>Lista de Usuários</h1>

@foreach ($usuarios as $u)

    <p>
        <strong>Nome:</strong> {{ $u->nome }} - <strong>Email:</strong> {{ $u->email }}

        <a href="{{ route('usuarios.edit', $u->id) }}"><button type="submit">Editar</button></a>

        <form action="{{ route('usuarios.destroy', $u->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </p>

@endforeach