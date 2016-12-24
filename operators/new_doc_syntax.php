<?php

/*
Nowdoc syntax was introduced in 5.3 and internally behaves the same way as single quotes
except it is suited toward the use of multi-line strings without the need for concatenating.
*/

$name = "Nikhil";

$multi_line = <<< 'EOD'
I am trying to
create a string
which spans many lines
but $name is not resolved
even it has curly bracs
{$name}

EOD;

echo $multi_line;

$here_doc_multi_line = <<< EOD
I am trying to
create a string
which spans many lines
but $name is resolved
not only it has curly bracs
{$name}

EOD;

echo $here_doc_multi_line;
