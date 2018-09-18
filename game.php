<?php

  class Game {

    var $deck;

    private function set_deck($cards) {
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
      return $this->{'get_deck'}();
    }

    function shuffle_cards() {
      $cards = $this->{'get_deck'}();
      $shuffled_cards = [];
      while (count($cards) > 0) {
        $random_card = $cards[array_rand($cards)];
        array_push($shuffled_cards, $random_card);
        $remaining_cards = array_diff($cards, array($random_card));
        $cards = $remaining_cards;
      }
      $this->{'set_deck'}($shuffled_cards);
      return $this->{'get_deck'}();
    }

  }

?>
