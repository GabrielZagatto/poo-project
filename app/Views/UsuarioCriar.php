<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - OO - Usuarios</title>
</head>
<body>
    <a href="http://localhost:8000/usuarios">
        Voltar
    </a>
    <form action="http://localhost:8000/usuarios/store" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="nome">Idade</label>
        <input type="text" name="idade" id="idade">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <button type="submit">Criar</button>
    </form>
</body>
</html>