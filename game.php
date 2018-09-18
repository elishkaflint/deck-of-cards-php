<?php

  class Game {

    var $deck;

    function set_deck($cards) {
      $this->deck = $cards;
    }

    function get_deck() {
      return $this->deck;
    }

    function generate_cards() {
      $cards = [];
      $suits = array('Hearts', 'Clubs', 'Spades', 'Diamonds');
      $numbers = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King');
      foreach( $suits as $suit ) {
        foreach ( $numbers as $number) {
            array_push($cards, $number . " of " . $suit );
        }
      }
      $this->{'set_deck'}($cards);
    }


  }

?>
