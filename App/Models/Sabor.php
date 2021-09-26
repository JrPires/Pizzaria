<?php

namespace MyApp\Model;

class Sabor
{
    const CALABRESA = 45;
    const FRANGO = 45;
    const MUSSARELA = 45;
    const PORTUQUESA = 45;
    const MILHO = 40;
    const MARGUERITA = 42;
    const QUATRO_QUEIJOS = 45;
    const CHOCOLATE = 50;
    const DOCE_DE_LEITE = 50;

    public function toStringDescription($value)
    {
        switch ($value) {
            case self::CALABRESA:
                return 'CALABRESA';
            case self::FRANGO:
                return 'FRANGO';
            case self::MUSSARELA:
                return 'MUSSARELA';
            case self::PORTUQUESA;
                return 'PORTUQUESA';
            case self::MILHO;
                return 'MILHO';
            case self::MARGUERITA;
                return 'MARGUERITA';
            case self::QUATRO_QUEIJOS;
                return 'QUATRO QUEIJOS';
            case self::CHOCOLATE;
                return 'CHOCOLATE';
            case self::DOCE_DE_LEITE;
                return 'DOCE DE LEITE';
            default:
                return '';
        }
    }
}