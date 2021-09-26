<?php

namespace MyApp\Model;

class Garcom
{
    public $id;
    public $nome;
    public $sobreNome;

    /**
     * @param $id
     * @param $nome
     * @param $sobreNome
     */
    public function __construct($id, $nome, $sobreNome)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobreNome()
    {
        return $this->sobreNome;
    }

    /**
     * @param mixed $sobreNome
     */
    public function setSobreNome($sobreNome)
    {
        $this->sobreNome = $sobreNome;
    }

    public function valorGarcom()
    {
        $tamanho = new Pizza();
        $tamanho->getTamanho();

        if($tamanho == 'GRANDE'){
            return 'R$' . 50.00 * 0.3;
        } elseif ($tamanho == 'MEDIA'){
            require 'R$' . 40.00;
        } elseif ($tamanho == 'PEQUENA'){
            return 'R$' . 30.00;
        }

    }

}
