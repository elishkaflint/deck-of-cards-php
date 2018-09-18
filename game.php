<?php

  class Game {

    var $deck;
    var $dealt_hands;
    var $number_of_cards = 7;
    var $number_of_players = 4;

    private function set_deck($cards) {
      $this->deck = $cards;
    }

    function get_deck() {
      return $this->deck;
    }

    private function set_dealt_hands($dealt_hands) {
      $this->dealt_hands = $dealt_hands;
    }

    function get_dealt_hands() {
      return $this->dealt_hands;
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
    }

    function deal_cards() {
      $cards = $this->{'get_deck'}();
      $dealt_hands = $this->{'create_players'}($this->number_of_players);
      $count = 0;
      for( $j = 0; $j < $this->number_of_cards; $j++ ) {
        for( $k = 0; $k < $this->number_of_players; $k++) {
          $dealt_hands[$k][$j] = $cards[$count];
          unset($cards[$count]);
          $count += 1;
        }
      }
      $this->{'set_deck'}($cards);
      $this->{'set_dealt_hands'}($dealt_hands);
    }

    function deal_summary() {
      $descriptions = [];
      $dealt_hands = $this->{'get_dealt_hands'}();
      for ( $i = 0; $i < $this->number_of_players; $i++ ) {
        array_push($descriptions, "PLAYER ".($i + 1).": ".join(", ", $dealt_hands[$i]));
      }
      return $descriptions;
    }

    private function create_players($number_of_players) {
      $dealt_hands = [];
      for( $i = 0; $i < $number_of_players; $i++ ) {
        array_push($dealt_hands, []);
      }
      return $dealt_hands;
    }

  }

?>
