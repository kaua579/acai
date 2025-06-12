<?php
    require_once "../funcoes.php";
    require_once "../conexao.php";
    
    $nome = "lara" ;
    $email = "lara@gmail";
    $senha = "321";
    $tipo = "e";

        
    editarUsuario($conexao, $nome, $email , $senha , $tipo , $id);
    


?>