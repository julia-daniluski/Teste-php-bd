<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
</head>
<body>
<h1>Usuários logados</h1>
    <form action="store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>senha</label>
        <input type="password" name="senha" required>
        <input type="submit" value="Adicionar Usuário">
    </form>
    <hr>
    <h2>Lista de usuários</h2>
    <div>
        <?php
         include 'read.php';
        ?>
    </div>
</body>
</html>