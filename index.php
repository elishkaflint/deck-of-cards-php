<?php include("game.php"); ?>
<?php
  // Create a new deck of cards
  $game = new game;
  $game->{'generate_cards'}();
  echo "\nINITIAL CARDS: \n" . join(', ', $game->{'get_deck'}())."\n\n";
  // Shuffle the deck of cards
  $game->{'shuffle_cards'}();
  echo "SHUFFLED CARDS: \n" . join(', ', $game->{'get_deck'}())."\n\n";
  // Deal the cards
  $game->{'deal_cards'}();
  $hands = $game->{'get_players'}();
  echo "DEALT CARDS: \n" . join(', ', $hands[0])."\n\n";
  // Show remaining cards
  $cards = $game->{'get_deck'}();
  echo "REMAINING CARDS: \n" . join(', ', $cards)."\n\n";
?>
