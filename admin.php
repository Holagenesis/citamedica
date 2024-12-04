<?php 
  session_start();
  if(!isset($_SESSION['user'])){
    header("location: index.php");
    session_destroy();
    die();
  }
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola admin</h1>
    <a href="logout.php">cerrar sesion</a>
</body>
</html>