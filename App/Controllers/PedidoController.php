<?php

namespace MyApp\Controllers;

use MyApp\Model\{Cliente, Pizza, Bebida, Garcom, Caixa};

class PedidoController
{
    public function pedidoAction()
    {
        $nome = $_POST['nome'];
        $tamanho = $_POST['tamanho'];
        $sabor1 = $_POST['sabor1'];
        $sabor2 = $_POST['sabor2'];
        $sabor3 = $_POST['sabor3'];
        $borda = $_POST['borda'];
        $tipoBebida = $_POST['bebida'];

        $cliente = (new Cliente)->novoCliente($nome);
        var_dump("echou");
        die();
        $pizza = (new Pizza)->novaPizza($tamanho, $sabor1, $sabor2, $sabor3, $borda);
        $bebida = (new Bebida)->novaBebida($tipoBebida);
        $garcom = (new Garcom)->valorGarcom();

        $conta = (new Caixa)->conta($tamanho, $bebida);

        $pedido = array(
            ['cliente' => $cliente],
            $pizza = ([
                ['tamanho' => $tamanho],
                ['sabor1' => $sabor1],
                ['sabor2' => $sabor2],
                ['sabor3' => $sabor3],
                ['borda' => $borda]
            ]),
            ['bebida' => $bebida],
            ['conta' => $conta]
        );

        header('Content-Type:application/json');
        echo json_encode($pedido);
    }
}
