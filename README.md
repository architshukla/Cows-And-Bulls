Cows-And-Bulls
==============

A PHP and Python based "Cows and Bulls" game.

About
-----

Cows and Bulls is a game where a player guesses a word (usually, a 4-letter word without repeating letters) given by another player. Each word is qualified as follows:

1. A "Bull" is a letter in the guessed word which appears in the same positon as it appears in the original word.
2. A "Cow" is a letter in the guessed word which appears in a different posiiton as it appeats in the original word.

Proper nouns, abbreviations and acronyms are not allowed.
The game continues until the player guesses the word correctly, that is, gets "4 Bulls" on a word. Then the opponent gets to play.

Examples
-------

1. If the original word is "GAME", and the player guesses the word to be "FAKE", the word is said to have "2 Bulls" as the letters A and E appear in GAME and FAKE in the same places
2. If the original word is "GAME", and the player guesses the word to be "HOAX", the word is said to have "1 Cow" as the letter A appears in both GAME and HOAX but in different places.
3. If the original word is "GAME", and the player guesses the word to be "EATS", the word is said to have "1 Bull and 1 Cow" where E is the "Cow" and A is the "Bull".
