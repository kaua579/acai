<?php
// usuario
function salvarUsuario($conexao, $nome, $email, $senha, $tipo)
{
    $sql = "INSERT INTO tb_usuario (nome, email, senha, tipo) VALUES (?, ?, ? ,?)";
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
    mysqli_stmt_bind_param($comando, 'ssss', $nome, $email, $senha, $tipo, $id);
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

// cliente
function salvarCliente($conexao, $cpf, $endereco, $pontos)
{
    $sql = "INSERT INTO tb_cliente (cpf, endereco, pontos) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssd', $cpf, $endereco, $pontos);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
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

function editarCliente($conexao, $cpf, $endereco, $idcliente)
{
    $sql = "UPDATE tb_cliente SET cpf=?, endereco=? WHERE idcliente=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssi', $cpf, $endereco, $idcliente);
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

    mysqli_stmt_bind_param($comando, 'sisss', $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);

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

    mysqli_stmt_bind_param($comando, 'ssdddii', $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto);
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
function salvarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entraga, $data, $nota_atedente)
{
    $sql = "INSERT INTO tb_pedido (observacao, horario_inicio, horario_final, status, valor_p, taxa_entraga, data, nota_atedente) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sttsddsd', $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entraga, $data, $nota_atedente);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function listarPedido($conexao, $idpedido)
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

function editarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente, $idpedido)
{
    $sql = "UPDATE tb_cliente SET observacao=?, horario_inicio=?, horario_final=?, status=?, valor_p=?, taxa_entrega=?, data=?, nota_atendente=? WHERE idpedido=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sttsddsdi',  $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente, $idpedido);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarPedido($conexao, $idpedido)
{
    $sql = "DELETE FROM tb_pedido WHERE idpedido = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $id);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarPedidoId($conexao, $idpedido)
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

// pagamento
function salvarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido) {
    $sql = "INSERT INTO tb_pagamento (forma_p, data_pagamento, valor_total, tb_pedido_idpedido) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdi', $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function listarPagamento($conexao) {

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

function editarPagamento($conexao, $forma_p, $data, $valor_total, $idpagamento) {}


function deletarPagamento($conexao, $idcliente) {}

function pesquisarPagamentoId($conexao, $idcliente) {}

///////////////////////////////////////////////////////////////////////////////////

// atendente
function salvarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao)
{
    $sql = "INSERT INTO tb_atendente (idade, horario_chegada, horario_saida, descricao) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'stts', $idade, $horario_chegada, $horario_saida, $descricao);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function listarAtendente($conexao, $idatendente)
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

function editarAtendente($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $idatendente)
{
    $sql = "UPDATE tb_atendente SET nome=?, tamanho=?,  complemento_g=?, complemento_p=?,  idatendente=?,  WHERE idatendente=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $tamanho, $complemento_g, $complemento_p, $idatendente);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarAtentende($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $idatendente)
{
    $sql = "DELETE FROM tb_atendente WHERE idatendente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idatendente);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function pesquisarAtentendeId($conexao, $idatendente)
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

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

function listarEntrega($conexao, $identrega)
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

function editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega, $identrega)
{
    $sql = "UPDATE tb_entrega SET data_entrega=?, horario_entrega=?,  localização=?, idpedido=?,  nota_entrega=?, identrega=?,  WHERE identrega=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssisi', $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega, $identrega);
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

function pesquisarEntregaId($conexao, $identrega)
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
