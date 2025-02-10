<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ver.css">
</head>
<link rel="icon" href="logo.png">
<header>

<div class="header-content">
      <a href="Pet_Hope_2.html"><img src="bulldog-frances.png.png" class="bulldog-frances" href="Pet_Hope_2.html" alt="Bulldog"></a>
      <h1>PET HOPE</h1>
   </div>
    <nav>
        <a class="doarop" href="Doar.html">Adotar</a>  
        <a class="login" href='Login.html'>Login</a>
    </nav>
</header>
<body>

<?php

    include "conexao.php" ;

    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    $sql = "SELECT * FROM informacoes where nome = '$usuario' and senha = '$senha'" ;

    $stm = $conexao->prepare($sql);

    $resultado = $conexao->query($sql);

    $achou = false;

    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) 
    {
        $achou = true;
    }if ($achou==true){
       echo "<div class='box'><h2>Dados válidos</h2></div>";
    }else{
        echo "<div class='box'><h2>Usuário ou Senha inválida!</h2><br><br><br><br><br><a href='login.html' class='back'>Tentar Novamente</a></div>";
    }
?>

</body>
</html>