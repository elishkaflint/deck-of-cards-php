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
  $descriptions = $game->{'deal_summary'}();
  echo "DEALT CARDS: \n" . join("\n", $descriptions)."\n\n";

  // Show remaining cards
  $cards = $game->{'get_deck'}();
  echo "REMAINING CARDS: \n" . join(', ', $cards)."\n\n";

?>
