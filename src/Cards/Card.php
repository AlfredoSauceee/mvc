<?php

namespace App\Card;

class Card
{
    private $value;
    private $suit;

    public function __construct($value, $suit)
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getSuit(): int
    {
        return $this->suit;
    }

    public function __toString(): string
    {
        return $this->value . $this->suit;
    }
}