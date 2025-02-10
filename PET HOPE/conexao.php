<?php
    $enderecoBD = "localhost" ;
    $banco      = "PetHope" ;
    $usuarioBD  = "root" ;
    $senhaBD    = "" ;

    $conexao = new PDO( "mysql:host=$enderecoBD;dbname=$banco" , $usuarioBD  , $senhaBD  ) ;

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
