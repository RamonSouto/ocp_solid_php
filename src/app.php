<?php

declare(strict_types=1);

use Ramon\OcpPratica\ArquivoPDF;
use Ramon\OcpPratica\ArquivoTXT;
use Ramon\OcpPratica\ArquivoWord;
use Ramon\OcpPratica\GeradorDeArquivos;
use Ramon\OcpPratica\ListaDeArquivos;

require_once "./vendor/autoload.php";


$listaDeArquivos = new ListaDeArquivos();
$listaDeArquivos->adicionar(new ArquivoWord());
$listaDeArquivos->adicionar(new ArquivoPDF());
$listaDeArquivos->adicionar(new ArquivoTXT());

$geradoraDeArquivos = new GeradorDeArquivos();

$geradoraDeArquivos->gerarArquivos($listaDeArquivos);