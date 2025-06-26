<?php
    require_once "../funcoes.php";
    require_once "../conexao.php";
    
    $nome = "lara" ;
    $email = "lara@gmail";
    $senha = "12345";
    $tipo = "c";
    $id = 6 ;
        
    editarUsuario($conexao, $nome, $email , $senha , $tipo , $id);
    


?>