<?php

$a = 'Multi-line example'      // concatenation operator (.)
    . "\n"                     // indenting new lines
    . 'of what to do'
    . "\n";

echo "{$a}";

$one = "eins ";
$two = "zwei ";

$one_two_three = $one . $two . "drei\n";

echo $one_two_three;

$one .= $two;

$one_two_three_again = $one . "drei\n";
echo $one_two_three_again;
