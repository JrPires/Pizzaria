<?php

namespace MyApp\Model;

class Cliente
{
    public $id;
    public $nome;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    function novoCliente($nome)
    {
        $cliente = new Cliente();
        $cliente->setNome($nome);
        return $cliente->getNome();
    }
}