<?php

namespace MyApp\Model;

class Bebida
{
    public $id;
    public $tipoBebida;
    public $valorBebida;

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
    public function getTipoBebida()
    {
        return $this->tipoBebida;
    }

    /**
     * @return int
     */
    public function getValorBebida()
    {
        return $this->valorBebida;
    }

    /**
     * @param int $valorBebida
     */
    public function setValorBebida($valorBebida)
    {
        $this->valorBebida = $valorBebida;
    }

    /**
     * @param mixed $tipoBebida
     */
    public function setTipoBebida($tipoBebida)
    {
        $this->tipoBebida = $tipoBebida;
    }

    public function novaBebida($tipoBebida)
    {
        $bebida = new Bebida();
        $bebida->setTipoBebida($tipoBebida);
        return $bebida->getTipoBebida();
    }

    public function valorBebida($bebida)
    {
        if($bebida == 'AGUA') {
            $this->setValorBebida(3);
            return $this->getValorBebida();
        } elseif ($bebida == 'REFRIGERANTE') {
            $this->setValorBebida(5);
            return $this->getValorBebida();
        } elseif ($bebida == 'CERVEJA') {
            $this->setValorBebida(8);
            return $this->getValorBebida();
        }
    }

}
