<?php

declare(strict_types=1);

namespace Ramon\OcpPratica;

class ArquivoWord extends Arquivo
{
    public function gerar(): void
    {
        echo "Gerei o DocX!" . PHP_EOL;
    }
}