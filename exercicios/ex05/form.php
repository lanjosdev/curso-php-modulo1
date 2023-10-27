<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Exercicio PHP</title>
</head>
<body>
    <main>
        <!-- após o simbolo de ? vem os parametros/valores  -->
        <form action="superglobais.php?tipo=Aluno&turno=Noite" method="post">
            <label for="usu">Usuário</label>
            <input type="text" name="user" id="usu">

            <label for="pass">Senha</label>
            <input type="password" name="senha" id="pass">

            <input type="submit" value="Entrar">

            <?php 
            // setcookie("modo", "dark", time() + 30);
            ?>
        </form>
    </main>    
</body>
</html>