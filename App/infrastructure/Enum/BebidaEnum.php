<?php

class BebidaEnum
{
    const AGUA = 1;
    const REFRIGERANTE = 2;
    const CERVEJA = 3;

    public function toStringDescription(int $value): string
    {
        switch ($value){
            case self::AGUA:
                return 'ÁGUA';
            case self::REFRIGERANTE:
                return 'REFRIGERANTE';
            case self::CERVEJA:
                return 'CERVEJA';
            default:
                return '';
        }
    }
}
