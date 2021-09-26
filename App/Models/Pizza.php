<?php

namespace MyApp\Model;

class Pizza
{
    public $id;
    public $tamanho;
    public $borda;
    public $valor;

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
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * @param mixed $tamanho
     */
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    /**
     * @return mixed
     */
    public function getSabor1()
    {
        return $this->sabor1;
    }

    /**
     * @param mixed $sabor1
     */
    public function setSabor1($sabor1)
    {
        $this->sabor1 = $sabor1;
    }

    /**
     * @return mixed
     */
    public function getSabor2()
    {
        return $this->sabor2;
    }

    /**
     * @param mixed $sabor2
     */
    public function setSabor2($sabor2)
    {
        $this->sabor2 = $sabor2;
    }

    /**
     * @return mixed
     */
    public function getSabor3()
    {
        return $this->sabor3;
    }

    /**
     * @param mixed $sabor3
     */
    public function setSabor3($sabor3)
    {
        $this->sabor3 = $sabor3;
    }

    /**
     * @return mixed
     */
    public function getBorda()
    {
        return $this->borda;
    }

    /**
     * @param mixed $borda
     */
    public function setBorda($borda)
    {
        $this->borda = $borda;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function dadosPizza($tamanho, $sabor1, $sabor2, $sabor3, $borda)
    {
        $this->setTamanho($tamanho);
        $this->setSabor1($sabor1);
        $this->setSabor2($sabor2);
        $this->setSabor3($sabor3);
        $this->setBorda($borda);
    }

    public function novaPizza($tamanho, $sabor1, $sabor2, $sabor3, $borda)
    {
        $pizza = new Pizza();
        $pizza->dadosPizza($tamanho, $sabor1, $sabor2, $sabor3, $borda);
        $tamanho = $pizza->getTamanho();

        if ($sabor1 = $pizza->getSabor1()){
            $sabor = new Sabor();
            $sabor->toStringDescription($sabor1);
            return $sabor1;
        }
        if ($sabor2 = $pizza->getSabor2()){
            $sabor = new Sabor();
            $sabor->toStringDescription($sabor2);
            return $sabor2;
        }

        if ($sabor3 = $pizza->getSabor3()){
            $sabor = new Sabor();
            $sabor->toStringDescription($sabor3);
            return $sabor3;
        }

        $borda = $pizza->getBorda();

        $pizzaNova = array([
            $tamanho,
            $sabor1,
            $sabor2,
            $sabor3,
            $borda
        ]);
        return $pizzaNova;

    }

    public function tamanhoValorPizza($tamanho)
    {
        if($tamanho == 'GRANDE') {
            $this->setValor(50);
            return $this->getValor();
        } elseif ($tamanho == 'MEDIA') {
            $this->setValor(40);
            return $this->getValor();
        } elseif ($tamanho == 'PEQUENA') {
            $this->setValor(30);
            return $this->getValor();
        }
    }

}
