<?php
enum Suit: string {
    case Clubs = '♣';
    case Diamonds = '♦';
    case Hearts = '♥';
    case Spades = '♠';
}

function pick_a_card(Suit $suit) {
    // ...
}

$val = Suit::Diamonds;

// OK
pick_a_card($val);
// OK
pick_a_card(Suit::Spades);
// TypeError: pick_a_card(): Argument #1 ($suit) must be of type Suit, string given
pick_a_card('Spades');
pick_a_card('♠');