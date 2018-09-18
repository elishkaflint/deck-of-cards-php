# DECK OF CARDS

## SUMMARY

An application to build a deck of cards which can be shuffled and dealt. This is my first attempt at coding in PHP and the code was completed in a couple of hours but has been spiked (ie. not test-driven).

## TECHNICAL

### QuickStart

#### Installing the code

```
> git clone
```

#### Running the script

The full programme is written in the index.php file (it's not interactive at this stage).

To run it, use the command line:
```
> cd deck-of-cards-php
> php index.php
```

## LEARNINGS

Some of the things I noticed when using PHP:
- PHP is much stricter than previous languages I've encountered; many instances of code failing to execute was due to missing semi-colons or the variable identifier $. Error messages are relatively high-level compared to other languages.
- Quite a lot of similarity with Javascript once the syntax is familiar, but more control around privacy when using classes.
- Arrays have implicit and immutable keys (if you remove first element, the index of the next element now at the start of the array will remain at 1).
- There are multiple ways to execute a function:
  - `call_user_func(array($player, 'SayHi'));`
  - `$player->{'SayHi'}();`
  - `$method = 'SayHi'; $player->$method();`

## USER STORIES
```
As a dealer,
So that I can set up a game of cards,
I want to start with a deck of 52 cards in perfect sequence
```
```
As a dealer,
So that I can deal a random hand to each player,
I want to be able to shuffle the cards so no two cards are still in sequence
```
```
As a dealer,
So that I can start the game,
I want to be able to deal out 7 cards to 4 players
```
