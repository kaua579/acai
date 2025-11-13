<?php

/**
 * Salvar o usuário no Banco de Dados
 * 
 * Salva um usuário caso não tenha
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $nome O nome informado pelo usuário.
 * @param string $email O e-mail informado pelo usuário.
 * @param string $senha A senha informada pelo usuário.
 * @param string $tipo O tipo informado pelo usuário.
 * @return int ID do usuário inserido.
 * 
 * @throws Exception Se houver falha na inserção no banco de dados.
 * 
 */
function salvarUsuario($conexao, $nome, $email, $senha, $tipo)
{
    $sql = "INSERT INTO tb_usuario (nome, email, senha, tipo) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssss', $nome, $email, $senha, $tipo);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}
/**
 * Lista todos os usuários cadastrados no Banco de Dados
 * 
 * Retorna uma lista de todos os usuários registrados na tabela `tb_usuario`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array Lista de usuários, onde cada usuário é representado por um array com as chaves:
 *     - 'idusuario' : ID do usuário.
 *     - 'email' : E-mail do usuário.
 *     - 'senha' : Senha do usuário (geralmente criptografada).
 *     - 'tipo' : Tipo de usuário (ex: "adm", "cliente").
 *     - 'nome' : Nome do usuário.
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
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
/**
 * Editar o usuário no Banco de Dados
 * 
 * Atualiza os dados de um usuário existente na tabela `tb_usuario`.
 * 
 * @param mysqli $conexao Uma conexão ativa com o banco de dados.
 * @param string $nome O novo nome informado para o usuário.
 * @param string $email O novo e-mail informado para o usuário.
 * @param string $senha A nova senha informada para o usuário.
 * @param string $tipo O novo tipo de usuário (ex: admin, cliente).
 * @param int $id O ID do usuário que será atualizado.
 * 
 * @return bool  se a atualização foi bem-sucedida, ou `false` em caso de falha.
 */
function editarUsuario($conexao, $nome, $email, $senha, $tipo, $id)
{
    $sql = "UPDATE tb_usuario SET nome=?, email=?, senha=?, tipo=? WHERE idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $email, $senha, $tipo, $id);
    $funcionou = mysqli_stmt_execute($comando);


    mysqli_stmt_close($comando);
    return $funcionou;
}

/**
 * Deletar o usuário no Banco de Dados
 * 
 * Remove um usuário da tabela caso o ID informado exista.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idusuario O ID do usuário a ser removido.
 * @return bool  $idusuario
 * @throws 0 caso mão encontrar o id informado
 */
function deletarUsuario($conexao, $idusuario)
{
    $sql = "DELETE FROM tb_usuario WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idusuario);

    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    return $funcionou;
}
/**
 * Pesquisar o usuário no Banco de Dados
 * 
 * Retorna os dados de um usuário com base no ID informado.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idusuario O ID do usuário a ser pesquisado.
 * 
 * @return array Um array associativo com os dados do usuário.
 * @throws null caso não encontre nenhum usuário.
 */
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

/**
 * Salvar o cliente no Banco de Dados
 * 
 * Insere um novo cliente na tabela `tb_cliente`, associando-o a um usuário existente.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $cpf O CPF do cliente.
 * @param string $endereco O endereço do cliente.
 * @param int $pontos Os pontos acumulados pelo cliente.
 * @param int $tb_usuario_idusuario O ID do usuário associado ao cliente.
 * 
 * @throws null  Não retorna nenhum valor.
 */
function salvarCliente($conexao, $cpf, $endereco, $pontos, $tb_usuario_idusuario)
{
    $sql = "INSERT INTO tb_cliente (cpf, endereco, pontos, tb_usuario_idusuario) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssii', $cpf, $endereco, $pontos, $tb_usuario_idusuario);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}
/**
 * Listar os clientes no Banco de Dados
 * 
 * Retorna todos os clientes cadastrados na tabela `tb_cliente`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array Lista de |Clientes, onde cada Cliente é representado por um array com as chaves:
 *     - 'cpf' : O CPF do cliente.
 *     - 'endereço' :  O endereço do cliente.
 *     - 'pontos' : Os pontos acumulados pelo cliente.
 *     - '$tb_usuario_idusuario' : O ID do usuário associado ao cliente.
 * @return array Um array contendo todos os clientes encontrados. Cada cliente é um array associativo com os dados da tabela `tb_cliente`.
 * @throws null caso não haja clientes cadastrados.
 */
function listarClientes($conexao)
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
/**
 * Editar o cliente no Banco de Dados
 * 
 * Atualiza os dados de um cliente na tabela `tb_cliente` com base no ID do cliente.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $cpf O CPF atualizado do cliente.
 * @param string $endereco O endereço atualizado do cliente.
 * @param int $pontos Os pontos atualizados do cliente.
 * @param int $idcliente O ID do cliente a ser atualizado.
 * @param int $tb_usuario_idusuario O ID do usuário associado ao cliente.
 * 
 * @return bool  caso a atualização seja realizada com sucesso.
 * @throws false caso ocorra uma falha na atualização.
 */
function editarCliente($conexao, $cpf, $endereco, $pontos, $idcliente, $tb_usuario_idusuario)
{
    $sql = "UPDATE tb_cliente SET cpf=?, endereco=?, pontos=?, tb_usuario_idusuario=? WHERE idcliente=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssiii', $cpf, $endereco, $pontos, $idcliente, $tb_usuario_idusuario);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}
/**
 * Deletar o cliente no Banco de Dados
 * 
 * Remove um cliente da tabela `tb_cliente` com base no ID do cliente.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idcliente O ID do cliente a ser removido.
 * 
 * @return bool  caso o cliente seja removido com sucesso.
 * @throws false caso ocorra uma falha na exclusão.
 */
function deletarCliente($conexao, $idcliente)
{
    $sql = "DELETE FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);
    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}
/**
 * Pesquisar o cliente no Banco de Dados pelo ID
 * 
 * Retorna os dados de um cliente com base no ID informado.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idcliente O ID do cliente a ser pesquisado.
 * 
 * @return array Um array associativo com os dados do cliente.
 * @throws null caso não encontre o cliente com o ID fornecido.
 */
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

/**
 * Salvar o produto no Banco de Dados
 * 
 * Insere um novo produto na tabela `tb_produto` com os dados fornecidos.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $nome O nome do produto.
 * @param string $tamanho O tamanho do produto.
 * @param string $complemento_g O complemento gratis do produto.
 * @param string $complemento_p O complemento pago do produto.
 * @param string $cobertura A cobertura do produto.
 * 
 * @return void Não retorna nenhum valor.
 */
function salvarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura)
{
    $sql = "INSERT INTO tb_produto (nome, tamanho, complemento_g, complemento_p, cobertura) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssss', $nome, $tamanho, $complemento_g, $complemento_p, $cobertura);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}

/**
 * Listar os produtos no Banco de Dados
 * 
 * Retorna todos os produtos cadastrados na tabela `tb_produto`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array Um array contendo todos os produtos encontrados. Cada produto é um array associativo com os dados da tabela `tb_produto`.
 *      - 'nome' : O nome do produto.
 *      - 'tamanho' : O tamanho do produto.
 *      - 'complemento_g' : O complemento gratis do produto.
 *      - 'complemento_p' : O complemento pago do produto.
 *      - 'cobertura' : A cobertura do produto.
 * @throws null caso não haja produtos cadastrados.
 */
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

/**
 * Editar o produto no Banco de Dados
 * 
 * Atualiza os dados de um produto na tabela `tb_produto` com base no ID do produto.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $nome O novo nome do produto.
 * @param string $tamanho O novo tamanho do produto.
 * @param string $complemento_g O novo complemento gratis do produto.
 * @param string $complemento_p O novo complemento pago do produto.
 * @param string $cobertura A nova cobertura do produto.
 * @param int $idproduto O ID do produto a ser atualizado.
 * 
 * @return bool  caso a atualização seja realizada com sucesso.
 * @throws false caso ocorra uma falha na atualização.
 */
function editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto)
{
    $sql = "UPDATE tb_produto SET nome=?, tamanho=?, complemento_g=?, complemento_p=?, cobertura=? WHERE idproduto=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssss', $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    return $funcionou;
}

/**
 * Deletar o produto no Banco de Dados
 * 
 * Remove um produto da tabela `tb_produto` com base no ID do produto.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idproduto O ID do produto a ser removido.
 * @return bool  caso o produto seja removido com sucesso.
 * @throws false caso ocorra uma falha na exclusão.
 */
function deletarProduto($conexao, $idproduto)
{
    $sql = "DELETE FROM tb_produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idproduto);

    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close(statement: $comando);

    return $funcionou;
}
/**
 * Pesquisar o produto no Banco de Dados pelo ID
 * 
 * Retorna os dados de um produto com base no ID informado.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idproduto O ID do produto a ser pesquisado.
 * 
 * @return array Um array associativo com os dados do produto.
 * @throws null caso não encontre o produto com o ID fornecido.
 */
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

/**
 * Salvar o pedido no Banco de Dados
 * 
 * Insere um novo pedido na tabela `tb_pedido` com os dados fornecidos.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $observacao Observações adicionais sobre o pedido.
 * @param string $horario_inicio O horário de início do pedido.
 * @param string $horario_final O horário de finalização do pedido.
 * @param string $status O status do pedido (ex: "em andamento", "finalizado").
 * @param float $valor_p O valor do pedido.
 * @param float $taxa_entrega A taxa de entrega do pedido.
 * @param string $data A data em que o pedido foi feito.
 * @param float $nota_atendente A nota dada ao atendente.
 * @param int $tb_endereco_idendereco O ID do endereço associado ao pedido.
 * @param int $tb_atendente_idatendente O ID do atendente que registrou o pedido.
 * @param int $tb_cliente_idcliente O ID do cliente que fez o pedido.
 * 
 * @return void Não retorna nenhum valor.
 */
function salvarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atendente, $tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente)
{
    $sql = "INSERT INTO tb_pedido (observacao, horario_inicio, horario_final, status, valor_p, taxa_entrega, data, nota_atendente, tb_endereco_idendereco, tb_atendente_idatendente, tb_cliente_idcliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssdisdiii', $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atendente, $tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}
/**
 * Lista todos os pedidos cadastrados no Banco de Dados
 * 
 * Retorna uma lista de todos os pedidos registrados na tabela `tb_pedido`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array Lista de pedidos, onde cada pedido é representado por um array com as chaves:
 *     - 'idpedido' : ID do pedido.
 *     - 'observacao' : Observações adicionais sobre o pedido.
 *     - 'horario_inicio' : Horário de início do pedido.
 *     - 'horario_final' : Horário de finalização do pedido.
 *     - 'status' : Status do pedido (ex: "em andamento", "finalizado").
 *     - 'valor_p' : Valor total do pedido.
 *     - 'taxa_entrega' : Taxa de entrega do pedido.
 *     - 'data' : Data em que o pedido foi realizado.
 *     - 'nota_atendente' : Nota dada ao atendente.
 *     - 'tb_endereco_idendereco' : ID do endereço associado ao pedido.
 *     - 'tb_atendente_idatendente' : ID do atendente que registrou o pedido.
 *     - 'tb_cliente_idcliente' : ID do cliente que fez o pedido.
 * 
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
function listarPedido($conexao)
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
/**
 * Editar um pedido no Banco de Dados
 * 
 * Atualiza os dados de um pedido existente na tabela `tb_pedido` com base no ID do pedido.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $observacao Novas observações sobre o pedido.
 * @param string $horario_inicio Novo horário de início do pedido.
 * @param string $horario_final Novo horário de finalização do pedido.
 * @param string $status O novo status do pedido (ex: "em andamento", "finalizado").
 * @param float $valor_p O novo valor total do pedido.
 * @param float $taxa_entrega A nova taxa de entrega do pedido.
 * @param string $data A nova data do pedido.
 * @param float $nota_atendente A nova nota dada ao atendente.
 * @param int $tb_endereco_idendereco O novo ID do endereço associado ao pedido.
 * @param int $tb_atendente_idatendente O novo ID do atendente associado ao pedido.
 * @param int $tb_cliente_idcliente O novo ID do cliente associado ao pedido.
 * @param int $idpedido O ID do pedido a ser atualizado.
 * 
 * @return bool  caso a atualização seja realizada com sucesso.
 * @throws false caso ocorra uma falha na atualização.
 */
function editarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente, $tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente, $idpedido)
{
    $sql = "UPDATE tb_pedido SET observacao=?, horario_inicio=?, horario_final=?, status=?, valor_p=?, taxa_entrega=?, data=?, nota_atendente=?, tb_endereco_idendereco=?, tb_atendente_idatendente=?, tb_cliente_idcliente=?  WHERE idpedido=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssdisdiiii',  $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente, $tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente, $idpedido);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}
/**
 * Deletar um pedido no Banco de Dados
 * 
 * Remove um pedido da tabela `tb_pedido` com base no ID do pedido.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idpedido O ID do pedido a ser removido.
 * 
 * @return bool  caso o pedido seja removido com sucesso.
 * @throws false caso ocorra uma falha na exclusão.
 */
function deletarPedido($conexao, $idpedido)
{
    $sql = "DELETE FROM tb_pedido WHERE idpedido = ?";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idpedido);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}
/**
 * Pesquisar um pedido no Banco de Dados pelo ID
 * 
 * Retorna os dados de um pedido com base no ID informado.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idpedido O ID do pedido a ser pesquisado.
 * 
 * @return array $pedido Um array associativo com os dados do pedido, ou `null` caso não encontre o pedido.
 * @throws 0 caso não encontre o pedido com o ID fornecido.
 */
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

/**
 * Salvar o pagamento no Banco de Dados
 * 
 * Insere um novo pagamento na tabela `tb_pagamento` com os dados fornecidos.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $forma_p A forma de pagamento utilizada (ex: "cartão", "dinheiro", etc).
 * @param string $data_pagamento A data em que o pagamento foi realizado.
 * @param float $valor_total O valor total do pagamento.
 * @param int $tb_pedido_idpedido O ID do pedido relacionado ao pagamento.
 * 
 * @return bool caso o pagamento seja registrado com sucesso.
 * @throws false caso ocorra uma falha na inserção.
 */
function salvarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido)
{
    $sql = "INSERT INTO tb_pagamento (forma_p, data_pagamento, valor_total, tb_pedido_idpedido) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdi', $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

/**
 * Lista todos os pagamentos registrados no Banco de Dados
 * 
 * Retorna uma lista de todos os pagamentos registrados na tabela `tb_pagamento`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array Lista de pagamentos, onde cada pagamento é representado por um array com as chaves:
 *     - 'idpagamento' : ID do pagamento.
 *     - 'forma_p' : Forma de pagamento (ex: "cartão", "dinheiro").
 *     - 'data_pagamento' : Data em que o pagamento foi realizado.
 *     - 'valor_total' : Valor total pago.
 *     - 'tb_pedido_idpedido' : ID do pedido relacionado ao pagamento.
 * 
 * @throws 0 Caso ocorra algum erro na execução da consulta SQL.
 */
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

/**
 * Editar um pagamento no Banco de Dados
 * 
 * Atualiza os dados de um pagamento existente na tabela `tb_pagamento` com base no ID do pagamento.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $forma_p A nova forma de pagamento (ex: "cartão", "dinheiro", etc).
 * @param string $data_pagamento A nova data em que o pagamento foi realizado.
 * @param float $valor_total O novo valor total do pagamento.
 * @param int $tb_pedido_idpedido O novo ID do pedido relacionado ao pagamento.
 * @param int $idpagamento O ID do pagamento a ser atualizado.
 * 
 * @return bool  caso a atualização seja realizada com sucesso.
 * @throws false caso ocorra uma falha na atualização.
 */
function editarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido, $idpagamento)
{
    $sql = "UPDATE tb_pagamento SET forma_p=?, data_pagamento=?, valor_total=?, tb_pedido_idpedido=? WHERE idpagamento=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdii', $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido, $idpagamento);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}

/**
 * Deletar um pagamento no Banco de Dados
 * 
 * Remove um pagamento da tabela `tb_pagamento` com base no ID do pagamento.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idpagamento O ID do pagamento a ser removido.
 * 
 * @return arrey  caso o pagamento seja removido com sucesso.
 * @throws 0 caso ocorra uma falha na exclusão.
 */
function deletarPagamento($conexao, $idpagamento)
{
    $sql = "DELETE FROM tb_pagamento WHERE idpagamento = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idpagamento);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

/**
 * Pesquisar um pagamento no Banco de Dados pelo ID
 * 
 * Retorna os dados de um pagamento com base no ID informado.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idpagamento O ID do pagamento a ser pesquisado.
 * 
 * @return array Um array associativo com os dados do pagamento.
 * @throws 0 caso não encontre o pagamento com o ID fornecido.
 */
function pesquisarPagamentoId($conexao, $idpagamento)
{
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

/**
 * Salvar um atendente no Banco de Dados
 * 
 * Insere um novo atendente na tabela `tb_atendente` com os dados fornecidos.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $idade A idade do atendente.
 * @param string $horario_chegada O horário de chegada do atendente.
 * @param string $horario_saida O horário de saída do atendente.
 * @param string $descricao Descrição do atendente (ex: função, observações, etc).
 * @param int $tb_usuario_idusuario O ID do usuário associado ao atendente.
 * 
 * @return bool  caso o atendente seja registrado com sucesso.
 * @throws false caso ocorra uma falha na inserção.
 */
function salvarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario)
{
    $sql = "INSERT INTO tb_atendente (idade, horario_chegada, horario_saida, descricao, tb_usuario_idusuario) VALUES (?, ?, ?, ?, ?)";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

/**
 * Lista todos os atendentes cadastrados no Banco de Dados
 * 
 * Retorna uma lista de todos os atendentes registrados na tabela `tb_atendente`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array $atendente, onde cada atendente é representado por um array com as chaves:
 *     - 'idatendente' : ID do atendente.
 *     - 'idade' : Idade do atendente.
 *     - 'horario_chegada' : Horário de chegada do atendente.
 *     - 'horario_saida' : Horário de saída do atendente.
 *     - 'descricao' : Descrição do atendente (ex: cargo, observações, etc).
 * 
 *  @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
function listarAtendente($conexao)
{
    $sql = "SELECT * FROM tb_atendente";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_atendente = [];
    while ($atendente = mysqli_fetch_assoc($resultados)) {
        $lista_atendente[] = $atendente;
    }
    mysqli_stmt_close($comando);

    return $lista_atendente;
}

/**
 * Editar um atendente no Banco de Dados
 * 
 * Atualiza os dados de um atendente na tabela `tb_atendente` com base no ID do usuário associado.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $idade A nova idade do atendente.
 * @param string $horario_chegada O novo horário de chegada do atendente.
 * @param string $horario_saida O novo horário de saída do atendente.
 * @param string $descricao A nova descrição do atendente (ex: cargo, observações, etc).
 * @param int $tb_usuario_idusuario O ID do usuário associado ao atendente a ser atualizado.
 * 
 * @return bool  caso a atualização seja realizada com sucesso.
 * @throws 0 caso ocorra uma falha na atualização.
 */
function editarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario)
{
    $sql = "UPDATE tb_atendente SET idade=?, horario_chegada=?,  horario_saida=?, descricao=?  WHERE tb_usuario_idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}


/**
 * Deletar um atendente no Banco de Dados
 * 
 * Remove um atendente da tabela `tb_atendente` com base no ID do atendente fornecido.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idatendente O ID do atendente a ser removido.
 * 
 * @return array $atendente
 * @throws 0 Caso não encontrar o ID informado.
 */
function deletarAtendente($conexao, $idatendente)
{
    $sql = "DELETE FROM tb_atendente WHERE idatendente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idatendente);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}

/**
 * Pesquisar um atendente pelo ID no Banco de Dados
 * 
 * Retorna os dados de um atendente com base no ID fornecido.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $idatendente O ID do atendente a ser pesquisado.
 * 
 * @return array $atendente dados do atendente, onde as chaves são:
 *     - 'idatendente' : ID do atendente.
 *     - 'idade' : Idade do atendente.
 *     - 'horario_chegada' : Horário de chegada do atendente.
 *     - 'horario_saida' : Horário de saída do atendente.
 *     - 'descricao' : Descrição do atendente (ex: cargo, observações, etc).
 *     - 'tb_usuario_idusuario' : ID do usuário associado ao atendente.
 * 
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
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

/**
 * Salvar uma entrega no Banco de Dados
 * 
 * Adiciona uma nova entrega à tabela `tb_entrega` com os dados fornecidos.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $data_entrega A data da entrega.
 * @param string $horario_entrega O horário da entrega.
 * @param string $localizacao A localização da entrega.
 * @param string $nota_entrega A nota fornecida para a entrega (ex: avaliação, feedback).
 * @param int $tb_pedido_idpedido O ID do pedido associado à entrega.
 * 
 * @return bool caso a entrega seja registrada com sucesso.
 * @throws false caso ocorra uma falha no processo de inserção.
 */
function salvarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $nota_entrega, $tb_pedido_idpedido)
{
    $sql = "INSERT INTO tb_entrega  (data_entrega, horario_entrega, localizacao, nota_entrega, tb_pedido_idpedido) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssssi', $data_entrega, $horario_entrega, $localizacao, $nota_entrega, $tb_pedido_idpedido);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
}
/**
 * Lista todas as entregas registradas no Banco de Dados
 * 
 * Retorna uma lista de todas as entregas registradas na tabela `tb_entrega`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @return array Lista de entregas, onde cada entrega é representada por um array com as chaves:
 *     - 'identrega' : ID da entrega.
 *     - 'data_entrega' : Data da entrega.
 *     - 'horario_entrega' : Horário da entrega.
 *     - 'localizacao' : Localização da entrega.
 *     - 'nota_entrega' : Nota de entrega fornecida.
 *     - 'tb_pedido_idpedido' : ID do pedido associado à entrega.
 * 
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
function listarEntrega($conexao)
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

/**
 * Edita uma entrega no Banco de Dados
 * 
 * Atualiza os dados de uma entrega existente na tabela `tb_entrega`.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param string $data_entrega A nova data da entrega.
 * @param string $horario_entrega O novo horário da entrega.
 * @param string $localizacao A nova localização da entrega.
 * @param string $nota_entrega A nova nota de entrega fornecida.
 * @param int $tb_pedido_idpedido O ID do pedido associado à entrega.
 * @param int $identrega O ID da entrega que será editada.
 *
 * @return bool  se a execução for bem-sucedida, ou em caso de falha.
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
function editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $nota_entrega, $tb_pedido_idpedido, $identrega)
{
    $sql = "UPDATE tb_entrega SET data_entrega=?, horario_entrega=?,  localizacao=?,  nota_entrega=?, tb_pedido_idpedido=?  WHERE identrega=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sssisi', $data_entrega, $horario_entrega, $localizacao,  $nota_entrega, $tb_pedido_idpedido, $identrega);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}
/**
 * Deleta uma entrega do Banco de Dados
 * 
 * Remove uma entrega existente na tabela `tb_entrega` com base no seu ID.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $identrega O ID da entrega a ser deletada.
 * 
 * @return bool Retorna se a execução for bem-sucedida, ou  em caso de falha.
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
function deletarEntrega($conexao, $identrega)
{
    $sql = "DELETE FROM tb_entrega WHERE identrega = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $identrega);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

    return $funcionou;
}
/**
 * Pesquisa uma entrega no Banco de Dados
 * 
 * Retorna os detalhes de uma entrega específica a partir do ID fornecido.
 * 
 * @param mysqli $conexao Uma conexão com o banco.
 * @param int $identrega O ID da entrega a ser pesquisada.
 * @return array|false Retorna um array com os dados da entrega, ou `false` caso não seja encontrado nenhum registro.
 *     O array retornado contém as chaves:
 *     - 'identrega' : ID da entrega.
 *     - 'data_entrega' : Data da entrega.
 *     - 'horario_entrega' : Horário da entrega.
 *     - 'localizacao' : Localização da entrega.
 *     - 'nota_entrega' : Nota associada à entrega.
 *     - 'tb_pedido_idpedido' : ID do pedido associado.
 * 
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
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
/**
 * Avaliar o atendente associado a um pedido
 * 
 * Atualiza a nota do atendente no pedido específico com base no ID do pedido fornecido.
 * 
 * @param mysqli $conexao Uma conexão com o banco de dados.
 * @param float $nota_atendente A nota atribuída ao atendente (geralmente de 1 a 5, ou conforme critério).
 * @param int $idpedido O ID do pedido associado ao atendente a ser avaliado.
 * @return bool Retorna `true` caso a atualização seja bem-sucedida, `false` caso contrário.
 * @throws Exception Caso ocorra algum erro na execução da consulta SQL.
 */
function avaliarAtendente($conexao, $nota_atendente, $idpedido)
{
    $sql = "UPDATE tb_pedido SET nota_atendente=? WHERE  idpedido=?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'di', $nota_atendente, $idpedido);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
}
