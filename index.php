<?php include("game.php"); ?>

<?php

  // Create a new deck of cards
  $game = new game;
  $game->{'generate_cards'}();
  $cards = $game->{'get_deck'}();
  echo 'Cards are: ' . join(', ', $cards);

?>
