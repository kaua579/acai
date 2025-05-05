<?php

function salvarUsuario($conexão, $nome, $email, $senha) {}

function listarUsuario($conexão) {}

function editarUsuario($nome, $email, $senha) {}

function deletarUsuario($conexao) {}

function pesquisarUsuario($conexão) {}

function salvarCliente($conexão, $nome, $cpf, $endereço) {}

function listarClientes($conexao,) {}

function editarCliente($conexao, $nome, $cpf, $endereco, $idcliente) {}

function deletarCliente($conexao, $idcliente){}

function pesquisarClienteId($conexao, $idcliente) {}

function salvarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura) {}

function listarProduto($conexao) {}

function editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idProduto) {}

function deletarProduto($conexao, $idproduto) {}

function pesquisarProdutoId($conexao, $idproduto) {}

//function salvarPedido($conexao, $observacao,$horario_inicio,$horario_final,$status,$valor_p, $taxa_entraga, $data, $nota_atedente,) {}

function listarPedidio ($conexao, $idpedido) {}

function editarPedido($conexao, $nome, $cpf, $endereco, $id) {}

function deletarPedidio($conexao, $idpedido) {}

function pesquisarPedidoId($conexao, $idpedido) {}

function salvarPagamento($conexao,$forma_p, data , $valor_total) {}

function listaPagamento($conexao) {}

function editarPagamento($conexao, ) {}

function editarPagamento($conexao, ) {}

function deletarPagamento($conexao, $idcliente) {}

function pesquisarPagamentoId($conexao, $idcliente) {}

function salvarAtendente($conexao, $idade, $nome, $cpf, $endereco) {}

function listarAtendente($conexao) {}

function editarAtendente($conexao,) {}

function deletarAtentende($conexao, $nome , $tamanho, $complemento_g , $complemento_p , $idproduto) {}

function pesquisarAtentendeId($conexao, $idproduto) {}

function salvarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido) {}

function listarEntrega($conexao) {}

function editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $identrega) {}

function deletarEntrega($conexao, $identrega) {}

function pesquisarEntregaId($conexao, $identrega) {}

function salvarAvaliacao($conexao, $nome, $cpf, $endereco) {}

function listarAvaliacao($conexao) {}

function editarAvaliacao($conexao, $nome, $cpf, $endereco, $id) {}

function deletarAvaliacao($conexao, $idcliente) {}

function pesquisarAvaliacaoId($conexao, $idcliente) {}

?>