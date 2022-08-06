<?php

declare(strict_types=1);

namespace Ramon\OcpPratica;

class ArquivoTXT extends Arquivo
{
    public function gerar(): void
    {
        echo "Gerei o TXT!" . PHP_EOL;
    }
}