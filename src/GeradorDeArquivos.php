<?php

declare(strict_types=1);

namespace Ramon\OcpPratica;

class GeradorDeArquivos
{
    public function gerarArquivos(array $arquivos): void
    {
        foreach ($arquivos as $arquivo) {
            $arquivo->gerar();
        }
    }
}
