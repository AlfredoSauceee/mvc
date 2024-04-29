<?php

namespace App\Card;

class CardHand
{
    private $hand;

    public function __construct()
    {
        $this->hand = [];
    }

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    public function draw($index): Card
    {
        return $this->hand[$index];
    }

    public function draw_all(): array
    {
        return $this->hand;
    }

    public function get_max_index(): int
    {
        return sizeof($this->hand);
    }

    public function remove($index): void
    {
        unset($this->hand[$index]);
        array_shift($this->hand);
    }
}