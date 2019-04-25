<?php
function random($car) {
$string = "";
$chaine = "abcdefghijklmnpqrstuvwxy";
srand((double)microtime()*1000000);
for($i=0; $i<$car; $i++) {
$string .= $chaine[rand()%strlen($chaine)];
}
return $string;
}

$rand = random(89);
$cryptRand = md5($rand);
var_dump($rand);
var_dump($cryptRand);

var_dump(md5("ccab53e82dc7311c67139ac5a5ba3083pl4st1c"));
 ?>
