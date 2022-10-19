<!-- Given an array (arr) as an argument complete the function countSmileys that should return the total number of smiling faces.
Rules for a smiling face:
Each smiley face must contain a valid pair of eyes. Eyes can be marked as : or ;
A smiley face can have a nose but it does not have to. Valid characters for a nose are - or ~
Every smiling face must have a smiling mouth that should be marked with either ) or D
No additional characters are allowed except for those mentioned.
Valid smiley face examples: :) :D ;-D :~)
Invalid smiley faces:  ;( :> :} :]
Example
countSmileys([':)', ';(', ';}', ':-D']);       // should return 2;
countSmileys([';D', ':-(', ':-)', ';~)']);     // should return 3;
countSmileys([';]', ':[', ';*', ':$', ';-D']); // should return 1; -->


<?php
function count_smileys($arr): int {
  $count = 0;
  $eyes = [":", ";"];
  $noses = ["-", "~"];
  $smiles = [")", "D"];
  foreach ($arr as $a){
    if (strlen($a) == 2 && in_array($a[0], $eyes) && in_array($a[1], $smiles)){
      $count += 1;
    } elseif (strlen($a) == 3 && in_array($a[0], $eyes) && in_array($a[1], $noses) && in_array($a[2], $smiles)){
      $count += 1;
    }
  }
  return $count;
}

echo count_smileys([';]', ':[', ';*', ':$', ';-D', ';D', ':)']);
?>
