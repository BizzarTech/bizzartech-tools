<?php
$poss = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%&";
$max = strlen($poss)-1;

while($c<10){
  $cnum = rand(0,$max);
  echo substr($poss,$cnum,1);
  $c++;
}



?>
