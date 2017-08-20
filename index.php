<?php
$a = 10;
function funct()

{  global $str, $rts, $b;
     $ttt =   $str + $rts + $b;
  echo "$ttt";
	 }

$str = 7;

$rts = 8;
$b = 56;
funct();

?>
