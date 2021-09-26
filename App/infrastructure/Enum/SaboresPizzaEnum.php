<?php

class SaboresPizzaEnum
{
    const CALABRESA = 1;
    const FRANGO = 2;
    const MUSSARELA = 3;
    const PORTUQUESA = 4;
    const MILHO = 5;
    const MARGUERITA = 6;
    const QUATRO_QUEIJOS = 7;
    const CHOCOLATE = 8;
    const DOCE_DE_LEITE = 9;

    public function toStringDescription(int $value)
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
