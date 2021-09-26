<?php

namespace MyApp\Model;

class Caixa{

    public function conta($tamanho, $bebida)
    {
        $pizza = (new Pizza)->tamanhoValorPizza($tamanho);
        $bebida = (new Bebida)->valorBebida($bebida);

        $preco = ($pizza + $bebida);
        $valorGarcom = $preco * 0.03;

        $conta = array([
            'preco' => $preco,
            'valorGarcom' => $valorGarcom
        ]);

        return $conta;

    }
}