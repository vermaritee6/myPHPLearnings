<?php
// WAP in PHP to show heredoc string.
$a=100;
echo <<< BLOCK
This is a heredoc string, $a \n
	“This is again new line of string “$a” ”

'This string is inside $a single quotes \t tabbed' = $a
BLOCK;

echo <<< "BLOCK"
This is a heredoc string, $a \n
	“This is again new line of string “$a” ”

'This string is inside $a single quotes \t tabbed' = $a
BLOCK;

?>