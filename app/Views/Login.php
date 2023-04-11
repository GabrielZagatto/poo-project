<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - OO - <?= $title ?></title>
</head>
<body>
    <form action="http://localhost:8000/login/" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar">
    </form>

    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error'] ?></p>
    <?php endif; ?>
</body>
</html>