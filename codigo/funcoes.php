<?php
// usuario feito
function salvarUsuario($conexao, $nome, $email, $senha, $tipo){
    $sql = "INSERT INTO tb_usuario (nome, email, senha, tipo) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssss', $nome, $email, $senha, $tipo);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}

function listarUsuario($conexao)
{
    $sql = "SELECT * FROM tb_usuario";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_usuario = [];
    while ($usuario = mysqli_fetch_assoc($resultados)) {
        $lista_usuario[] = $usuario;
    }
    mysqli_stmt_close($comando);

    return $lista_usuario;
}

function editarUsuario($conexao, $nome, $email, $senha, $tipo, $id)
{

    $sql = "UPDATE tb_usuario SET nome=?, email=?, senha=?, tipo=? WHERE idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $email, $senha, $tipo, $id);
    $funcionou = mysqli_stmt_execute($comando);


    mysqli_stmt_close($comando);
    return $funcionou;
}


function deletarUsuario($conexao, $idusuario)
{

    $sql = "DELETE FROM tb_usuario WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idusuario);

    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarUsuario($conexao, $idusuario)
{
    $sql = "SELECT * FROM tb_usuario WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idusuario);

    mysqli_stmt_execute($comando);

    $resultado = mysqli_stmt_get_result($comando);

    $usuario = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);

    return $usuario;
}

////////////////////////////////////////////////////////////////////////////////////

// cliente feito
function salvarCliente($conexao, $cpf, $endereco, $pontos, $tb_usuario_idusuario)
{
    $sql = "INSERT INTO tb_cliente (cpf, endereco, pontos, tb_usuario_idusuario) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssii', $cpf, $endereco, $pontos, $tb_usuario_idusuario);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}

function listarClientes($conexao,)
{
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

function editarCliente($conexao, $cpf, $endereco,$pontos, $idcliente, $tb_usuario_idusuario) // feito
{
    $sql = "UPDATE tb_cliente SET cpf=?, endereco=?, pontos=?, tb_usuario_idusuario=? WHERE idcliente=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssiii', $cpf, $endereco, $pontos, $idcliente, $tb_usuario_idusuario);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}
function deletarCliente($conexao, $idcliente)
{
    $sql = "DELETE FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);
    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarClienteId($conexao, $idcliente)
{
    $sql = "SELECT * FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $cliente = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $cliente;
}

///////////////////////////////////////////////////////////////////////////////////

// produto
function salvarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura)
{
    $sql = "INSERT INTO tb_produto (nome, tamanho, complemento_g, complemento_p, cobertura) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssss', $nome, $tamanho, $complemento_g, $complemento_p, $cobertura );

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}


function listarProduto($conexao)
{
    $sql = "SELECT * FROM tb_produto";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_produto = [];
    while ($produto = mysqli_fetch_assoc($resultados)) {
        $lista_produto[] = $produto;
    }
    mysqli_stmt_close($comando);

    return $lista_produto;
}


function editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto)
{
    $sql = "UPDATE tb_produto SET nome=?, tamanho=?, complemento_g=?, complemento_p=?, cobertura=? WHERE idproduto=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssss', $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    return $funcionou;
}


function deletarProduto($conexao, $idproduto)
{
    $sql = "DELETE FROM tb_produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idproduto);

    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close(statement: $comando);

    return $funcionou;
}

function pesquisarProdutoId($conexao, $idproduto)
{
    $sql = "SELECT * FROM tb_produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idproduto);

    mysqli_stmt_execute($comando);

    $resultado = mysqli_stmt_get_result($comando);

    $produto = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);

    return $produto;
}

///////////////////////////////////////////////////////////////////////////////////

// pedido
function salvarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atendente, $tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente) // feito
{
    $sql = "INSERT INTO tb_pedido (observacao, horario_inicio, horario_final, status, valor_p, taxa_entrega, data, nota_atendente, tb_endereco_idendereco, tb_atendente_idatendente, tb_cliente_idcliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssdisdiii', $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atendente, $tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    
}

function listarPedido($conexao,) // feito
{
    $sql = "SELECT * FROM tb_pedido";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_pedido = [];
    while ($pedido = mysqli_fetch_assoc($resultados)) {
        $lista_pedido[] = $pedido;
    }
    mysqli_stmt_close($comando);

    return $lista_pedido;
}

function editarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente,$tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente, $idpedido ) // feito
{
    $sql = "UPDATE tb_pedido SET observacao=?, horario_inicio=?, horario_final=?, status=?, valor_p=?, taxa_entrega=?, data=?, nota_atendente=?, tb_endereco_idendereco=?, tb_atendente_idatendente=?, tb_cliente_idcliente=?  WHERE idpedido=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssdisdiiii',  $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente,$tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente, $idpedido);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarPedido($conexao, $idpedido) // feito
{
    $sql = "DELETE FROM tb_pedido WHERE idpedido = ?";
    
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idpedido);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarPedidoId($conexao, $idpedido) // feito
{
    $sql = "SELECT * FROM tb_pedido WHERE idpedido = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idpedido);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $pedido = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $pedido;
}

///////////////////////////////////////////////////////////////////////////////////

// pagamento feito
function salvarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido)
{
    $sql = "INSERT INTO tb_pagamento (forma_p, data_pagamento, valor_total, tb_pedido_idpedido) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdi', $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function listarPagamento($conexao)
{

    $sql = "SELECT * FROM tb_pagamento";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_atendentes = [];
    while ($pagamento = mysqli_fetch_assoc($resultados)) {
        $lista_pagamento[] = $pagamento;
    }
    mysqli_stmt_close($comando);

    return $lista_pagamento;
}

function editarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $idpagamento){
    $sql = "UPDATE tb_pagamento SET forma_p=?, data_pagamento=?,  valor_total=?, idpagamento=?,  WHERE idpagamen=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdi', $forma_p, $data_pagamento, $valor_total, $idpagamento);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarPagamento($conexao, $idpagamento){
    $sql = "DELETE FROM tb_pagamento WHERE idpagamento = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idpagamento);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarPagamentoId($conexao, $idpagamento){
    $sql = "SELECT * FROM tb_pagamento WHERE idpagamento = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idpagamento);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $pagar = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $pagar;
}
///////////////////////////////////////////////////////////////////////////////////

// atendente
function salvarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao , $tb_usuario_idusuario)
{
    $sql = "INSERT INTO tb_atendente (idade, horario_chegada, horario_saida, descricao, tb_usuario_idusuario) VALUES (?, ?, ?, ?, ?)";
    
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function listarAtendente($conexao)
{
    $sql = "SELECT * FROM tb_atendente";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_atendentes = [];
    while ($atendente = mysqli_fetch_assoc($resultados)) {
        $lista_atendentes[] = $atendente;
    }
    mysqli_stmt_close($comando);

    return $lista_atendentes;
}

function editarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao , $tb_usuario_idusuario)
{
    $sql = "UPDATE tb_atendente SET idade=?, horario_chegada=?,  horario_saida=?, descricao=?  WHERE tb_usuario_idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $idade, $horario_chegada, $horario_saida, $descricao , $tb_usuario_idusuario);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}



function deletarAtentende($conexao, $idade, $horario_chegada, $horario_saida, $descricao , $tb_usuario_idusuario)
{
    $sql = "DELETE FROM tb_atendente WHERE tb_usuario_idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $tb_usuario_idusuario);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarAtendenteId($conexao, $idatendente)
{
    $sql = "SELECT * FROM tb_atendente WHERE idatendente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idatendente);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $atendente = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $atendente;
}

///////////////////////////////////////////////////////////////////////////////////

// entrega
function salvarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega)
{
    $sql = "INSERT INTO tb_entrega (data_entrega, horario_entrega, localizacao, idpedido, nota_entrega) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssis', $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega);

     mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}

function listarEntregas($conexao,)
{
    $sql = "SELECT * FROM tb_entrega";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_entregas = [];
    while ($entrega = mysqli_fetch_assoc($resultados)) {
        $lista_entregas[] = $entrega;
    }
    mysqli_stmt_close($comando);

    return $lista_entregas;
}


function editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $nota_entrega, $tb_pedido_idpedido, $identrega)
{
    $sql = "UPDATE tb_entrega SET data_entrega=?, horario_entrega=?,  localizacao=?,  nota_entrega=?, tb_pedido_idpedido=?  WHERE identrega=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssisi', $data_entrega, $horario_entrega, $localizacao,  $nota_entrega, $tb_pedido_idpedido, $identrega);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarEntrega($conexao, $identrega)
{
    $sql = "DELETE FROM tb_entrega WHERE identrega = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $identrega);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarEntregaid($conexao, $identrega)
{
    $sql = "SELECT * FROM tb_entrega WHERE identrega = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $identrega);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $entrega = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $entrega;
}

///////////////////////////////////////////////////////////////////////////////////


//function salvarAvaliacao($conexao, $nome, $cpf, $endereco) {}

//function listarAvaliacao($conexao) {}

//function editarAvaliacao($conexao, $nome, $cpf, $endereco, $id) {}

//function deletarAvaliacao($conexao, $idcliente) {}

//function pesquisarAvaliacaoId($conexao, $idcliente) {}

// A TABELA DE ENDEREÇO PEÇO AO SENHOR PARA AJUDAR NOIS, POIS TEM DUAS LIGAÇÕES NELA.
