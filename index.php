<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="form" action="login.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="img-login" src="img/user.png" alt="">
                <h2 class="login-text">Login</h2>
            </div>
            <?php
            if(isset($_SESSION['not_authenticated'])):
            ?>
            <div class="wrong-pattern">
                <p>Usuário ou senha incorreto</p>
            </div>
            <?php
            endif;
            unset($_SESSION['not_authenticated']);
            ?>
            <div class="div-form">
                <div class="card-group strong-txt">
                    <label>Email</label>
                    <input type="email" name="user" placeholder="Digitar e-mail">
                </div>
                <div class="card-group strong-txt">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="Digitar senha">
                </div>
                <div class="boxes">
                    <input type="checkbox" id="box-1">
                    <label for="box-1">Lembre-me</label>
                </div>
                <div class="card-group btn">
                    <button type="submit">ACESSAR</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>