<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require_once "../con/conexao.php";
require_once "../classes/contaEntrada.php";
require_once "../classes/contaSaida.php";

$entrada = new contaEntrada();
//$saidas = new contaSaida();

$load = json_decode(file_get_contents('php://input'));

$id_empresa = $load->id_empresa;
$cat = $load->categoria;
$subcat = $load->sucategoria;
$val = $load->valor;
$forPag = $load->forma_pagamento;
$data = $load->data;

/*$id_empresa = 1;
$cat = "2";
$subcat = "2";
$val = 22222.22;
$forPag = "Dinheiro";
$data = "2015-11-25";*/

//$entrada->insereContaEntrada($id_empresa, $cat, $subcat, $val, $forPag, $data);


$entrada->mostraContasEntrada($id_empresa);


