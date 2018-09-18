<?php include("game.php"); ?>

<?php
  $game = new game;
  $cards = $game->get_deck();
  echo 'Cards are: ' . join(', ', $cards);
?>
