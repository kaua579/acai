<?php

function salvarUsuario($conexão, $nome, $email, $senha, $tipo) {}

function listarUsuario($conexão) {}

function editarUsuario($nome, $email, $senha, $tipo, $id) {}

function deletarUsuario($conexao, $idusuario) {}

function pesquisarUsuario($conexão, $idusuario) {}

////////////////////////////////////////////////////////////////////////////////////

function salvarCliente($conexão, $cpf, $endereço, $pontos) {}

function listarClientes($conexao,) {}

function editarCliente($conexao, $cpf, $endereco, $idcliente) {}

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