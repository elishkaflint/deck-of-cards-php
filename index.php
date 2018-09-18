<?php include("game.php"); ?>
<?php
  // Create a new deck of cards
  $game = new game;
  $cards = $game->{'generate_cards'}();
  echo "\nINITIAL CARDS: \n" . join(', ', $cards)."\n\n";
  // Shuffle the deck of cards
  $cards = $game->{'shuffle_cards'}();
  echo "SHUFFLED CARDS: \n" . join(', ', $cards)."\n\n";
?>
