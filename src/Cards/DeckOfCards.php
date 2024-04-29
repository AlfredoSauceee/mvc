<?php

namespace App\Card;

class DeckOfCards extends CardHand
{

    public function __construct()
    {
        for($s = 0; $s <= 3; $s++) {
            for($i = 0; $i <= 12; $i++) {
                new Card($i, $s);
            }
        }
    }


}