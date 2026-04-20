<h1>Criar Usuário</h1>

<form method="POST" action="/usuarios">
    @csrf

    <input type="text" name="nome" placeholder="Nome"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <input type="password" name="password" placeholder="Senha"><br><br>

    <button type="submit">Salvar</button>
</form>