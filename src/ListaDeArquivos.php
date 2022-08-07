<?php

declare(strict_types=1);

namespace Ramon\OcpPratica;

use SplDoublyLinkedList;
use RuntimeException;

class ListaDeArquivos
{
    private SplDoublyLinkedList $arquivos;

    public function __construct() {
        $this->arquivos = new SplDoublyLinkedList();
    }

    public function tamanho(): int
    {
        return $this->arquivos->count();
    }
    
    public function adicionar(Arquivo $arquivo): void
    {
        $this->arquivos->push($arquivo);
    }

    public function remover(): mixed
    {
        try {
            $this->arquivos->pop();
        } catch (RuntimeException $e) {
            throw new \Exception("Não existe arquivo para ser removidos!: {$e->getMessage}");
        }
    }
    public function todos(): array
    {
        $arquivos = [];

        if ($this->tamanho() === 0) {
            throw new \Exception("Nenhum item encontra na lista de arquiva");
        }

        foreach ($this->arquivos as $arquivo) {
            $arquivos[] = $arquivo;
        }
        return $arquivos;
    }
}
