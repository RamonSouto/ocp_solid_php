<?php

declare(strict_types=1);

use Ramon\OcpPratica\ArquivoPDF;
use Ramon\OcpPratica\ArquivoTXT;
use Ramon\OcpPratica\ArquivoWord;
use Ramon\OcpPratica\GeradorDeArquivos;

require_once "./vendor/autoload.php";


$arquivos = [ new ArquivoWord(), new ArquivoPDF, new ArquivoTXT];

$geradoraDeArquivos = new GeradorDeArquivos;

$geradoraDeArquivos->gerarArquivos($arquivos);