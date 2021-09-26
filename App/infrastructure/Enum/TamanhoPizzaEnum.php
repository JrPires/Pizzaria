<?php

class TamanhoPizzaEnum
{
    const PIZZA_GRANDE = 1;
    const PIZZA_MEDIA = 2;
    const PIZZA_PEQUENA = 3;

    public function toStringDescrioption(int $value): string
    {
        switch ($value) {
            case self::PIZZA_GRANDE:
                return 'PIZZA GRANDE';
            case self::PIZZA_MEDIA:
                return 'PIZZA MÉDIA';
            case self::PIZZA_PEQUENA:
                return 'PIZZA PEQUENA';
            default:
                return '';
        }
    }
}
