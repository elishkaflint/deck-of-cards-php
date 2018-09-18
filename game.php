<?php

  class Game {

    var $deck;
    var $players;
    var $number_of_cards = 7;
    var $number_of_players = 4;

    private function set_deck($cards) {
      $this->deck = $cards;
    }

    function get_deck() {
      return $this->deck;
    }

    private function set_players($hands) {
      $this->players = $hands;
    }

    function get_players() {
      return $this->players;
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
      $players = $this->{'create_players'}($this->number_of_players);
      $count = 0;
      for( $j = 0; $j < $this->number_of_cards; $j++ ) {
        for( $k = 0; $k < $this->number_of_players; $k++) {
          $players[$k][$j] = $cards[$count];
          unset($cards[$count]);
          $count += 1;
        }
      }
      $this->{'set_deck'}($cards);
      $this->{'set_players'}($players);
    }

    function deal_summary() {
      $descriptions = [];
      $player_hands = $this->{'get_players'}();
      for ( $i = 0; $i < $this->number_of_players; $i++ ) {
        array_push($descriptions, "PLAYER ".($i + 1).": ".join(", ", $player_hands[$i]));
      }
      return $descriptions;
    }

    private function create_players($number_of_players) {
      $players = [];
      for( $i = 0; $i < $number_of_players; $i++ ) {
        array_push($players, []);
      }
      return $players;
    }

  }

?>
