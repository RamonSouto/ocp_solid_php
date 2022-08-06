<?php

declare(strict_types=1);

namespace Ramon\OcpPratica;

class ArquivoPDF extends Arquivo
{
    public function gerar(): void
    {
        echo "Gerei o PDF!" . PHP_EOL;
    }
}