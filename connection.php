<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB', 'login');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possível conectar');