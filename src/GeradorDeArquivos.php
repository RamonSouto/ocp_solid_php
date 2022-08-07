<?php

declare(strict_types=1);

namespace Ramon\OcpPratica;

class GeradorDeArquivos
{
    public function gerarArquivos(ListaDeArquivos $arquivos): void
    {
        foreach ($arquivos->todos() as $arquivo) {
            $arquivo->gerar();
        }
    }
}
