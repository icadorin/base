<?php
session_start();
include('check_user.php');
?>

<h2>Olá, <?php echo $_SESSION['user'];?></h2>
<h2><a href="logout.php">Sair</a></h2>