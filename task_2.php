<!-- In this kata you have to write a simple Morse code decoder. While the Morse code is now mostly superseded by voice and digital data communication channels, it still has its use in some applications around the world.
The Morse code encodes every character as a sequence of "dots" and "dashes". For example, the letter A is coded as ·−, letter Q is coded as −−·−, and digit 1 is coded as ·−−−−. The Morse code is case-insensitive, traditionally capital letters are used. When the message is written in Morse code, a single space is used to separate the character codes and 3 spaces are used to separate words. For example, the message HEY JUDE in Morse code is ···· · −·−−   ·−−− ··− −·· ·.

NOTE: Extra spaces before or after the code have no meaning and should be ignored.

In addition to letters, digits and some punctuation, there are some special service codes, the most notorious of those is the international distress signal SOS (that was first issued by Titanic), that is coded as ···−−−···. These special codes are treated as single special characters, and usually are transmitted as separate words.

Your task is to implement a function that would take the morse code as input and return a decoded human-readable string.

For example:
decode_morse('.... . -.--   .--- ..- -.. .')
//should return "HEY JUDE"

The Morse code table is preloaded for you as a dictionary, feel free to use it:
PHP: MORSE_CODE['.--'] -->

<?php

function decode_morse(string $code): string {

  $arr = explode("   ", $code);
  $arr = array_filter($arr);
  
  for($i = 0; $i < count($arr); $i++){
    $arr[$i] = explode(" ", $arr[$i]);
    for($x = 0; $x < count($arr[$i]); $x++){
      $arr[$i][$x] = MORSE_CODE[$arr[$i][$x]];
    }
  }

  for($i = 0; $i < count($arr); $i++){
    $arr[$i] = implode(" ", $arr[$i]);
    $arr[$i] = str_replace(" ", "", $arr[$i]);
    }
  $result = implode(" ", $arr);
  return $result;
}

decode_morse('.... . -.--   .--- ..- -.. .'); // returns "HEY JUDE"

?>
