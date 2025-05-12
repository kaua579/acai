<?php

function salvarUsuario($conexão, $nome, $email, $senha, $tipo) {
    $sql = "INSERT INTO tb_usuario (nome, email, senha, tipo) VALUES (?, ?, ? ,?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssss', $nome, $email , $senha , $tipo);
    
    mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
}

function listarUsuario($conexão) {
    $sql = "SELECT * FROM tb_usuario";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_usuario = [];
    while ($cliente = mysqli_fetch_assoc($resultados)) {
        $lista_usuario[] = $usuario;
    }
    mysqli_stmt_close($comando);

    return $lista_usuario;
}

function editarUsuario($conexao, $nome, $email, $senha, $tipo, $id) {

    $sql = "UPDATE tb_usuario SET nome=?, email=?, senha=?, tipo=? WHERE idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);
     mysqli_stmt_bind_param($comando, 'ssss', $nome, $email, $senha, $tipo, $id);
    
}


function deletarUsuario($conexao, $idusuario) {

    $sql = "DELETE FROM tb_usuario WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idusuario);
 
    $funcionou = mysqli_stmt_execute($comando);
     
    mysqli_stmt_close($comando);
    
    return $funcionou;
    
}

function pesquisarUsuario($conexão, $idusuario)  {
    $sql = "SELECT * FROM tb_usuario WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idusuario);

    mysqli_stmt_execute($comando);

    $resultado = mysqli_stmt_get_result($comando);

    $cliente = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);

    return $usuario;
}
    
////////////////////////////////////////////////////////////////////////////////////

function salvarCliente($conexão, $cpf, $endereço, $pontos) {
    $sql = "INSERT INTO tb_cliente (cpf, endereco, pontos) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssd', $cpf, $endereco, $pontos);
    
    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarClientes($conexao,) {
    $sql = "SELECT * FROM tb_cliente";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_clientes = [];
    while ($cliente = mysqli_fetch_assoc($resultados)) {
        $lista_clientes[] = $cliente;
    }
    mysqli_stmt_close($comando);

    return $lista_clientes;
}

function editarCliente($conexao, $cpf, $endereco, $idcliente) {
    $sql = "UPDATE tb_cliente SET cpf=?, endereco=? WHERE idcliente=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssi', $cpf, $endereco, $id);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;    
}

function deletarCliente($conexao, $idcliente){}

function pesquisarClienteId($conexao, $idcliente) {}

///////////////////////////////////////////////////////////////////////////////////

function salvarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura) {}

function listarProduto($conexao) {}

function editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto) {}

function deletarProduto($conexao, $idproduto) {}

function pesquisarProdutoId($conexao, $idproduto) {}

///////////////////////////////////////////////////////////////////////////////////

function salvarPedido($conexao, $observacao,$horario_inicio,$horario_final,$status,$valor_p, $taxa_entraga, $data, $nota_atedente) {}

function listarPedidio ($conexao, $idpedido) {}

function editarPedido($conexao, $observacao,$horario_inicio,$horario_final,$status,$valor_p, $taxa_entraga, $data, $nota_atedente, $idpedido) {}

function deletarPedidio($conexao, $idpedido) {}

function pesquisarPedidoId($conexao, $idpedido) {}
///////////////////////////////////////////////////////////////////////////////////

function salvarPagamento($conexao,$forma_p, $data , $valor_total) {}

function listaPagamento($conexao, $idpagamento) {}

function editarPagamento($conexao,$forma_p, $data , $valor_total, $idpagamento) {}

function deletarPagamento($conexao, $idcliente) {}

function pesquisarPagamentoId($conexao, $idcliente) {}

///////////////////////////////////////////////////////////////////////////////////


function salvarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao) {}

function listarAtendente($conexao, $idatendente) {}

function editarAtendente($conexao, $nome , $tamanho, $complemento_g , $complemento_p , $idatendente) {}

function deletarAtentende($conexao, $nome , $tamanho, $complemento_g , $complemento_p , $idatendente) {}

function pesquisarAtentendeId($conexao, $idatendente) {}

///////////////////////////////////////////////////////////////////////////////////


function salvarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega) {}

function listarEntrega($conexao, $identrega) {}

function editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega, $identrega) {}

function deletarEntrega($conexao, $identrega) {}

function pesquisarEntregaId($conexao, $identrega) {}

///////////////////////////////////////////////////////////////////////////////////


//function salvarAvaliacao($conexao, $nome, $cpf, $endereco) {}

//function listarAvaliacao($conexao) {}

//function editarAvaliacao($conexao, $nome, $cpf, $endereco, $id) {}

//function deletarAvaliacao($conexao, $idcliente) {}

//function pesquisarAvaliacaoId($conexao, $idcliente) {}
 
// A TABELA DE ENDEREÇO PEÇO AO SENHOR PARA AJUDAR NOIS, POIS TEM DUAS LIGAÇÕES NELA.
?>