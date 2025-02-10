<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de conta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="rec.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<link rel="icon" href="logo.png">
<body>
    <header>

        <div class="header-content">
            <a href="Pet_Hope_2.html"><img src="bulldog-frances.png.png" class="bulldog-frances" href="Pet_Hope_2.html" alt="Bulldog"></a>
            <h1>PET HOPE</h1>
         </div>

        <nav>
            <a class="doar" href="Doar.html">Doar</a>
            <a class="doar" href="Login.html">Login</a>
        </nav>
    </header>
<body>
<?php
    $nome   = $_REQUEST["username"] ;
    $idade  = $_REQUEST["age"] ;
    $email  = $_REQUEST["email"] ;
    $senha  = $_REQUEST["password"] ;
    $CPF    = $_REQUEST["cpf"] ;
    $CEP    = $_REQUEST["cep"] ;

    include "conexao.php" ;

    try {
        $sql = "INSERT INTO informacoes (nome, idade, email, senha, CPF, CEP) VALUES (:nome, :idade, :email, :senha, :CPF, :CEP)";
        $stm = $conexao->prepare($sql);
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':idade', $idade);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':senha', $senha);
        $stm->bindParam(':CPF', $CPF);
        $stm->bindParam(':CEP', $CEP);

        if ($stm->execute()) {
            echo "<div class='container'><h2>Conta criada</h2><br><a href='login.html' class='form-group1'>Fazer Login</a></div>";
        } else {
            echo "<div class='container'><h2>Erro ao criar conta,<br> tente novamente</h2> <br><a href='cadastro.html'>Voltar</a></div>";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

    echo "<br><br>";

?>
</body>
</html>