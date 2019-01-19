<?php

function print_abc($kolom,$baris){
$abjad=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','v','q','r','s','t','u','v','w','x','y','z');
for($h=0;$h<$baris;$h++){
	for($i=0;$i<$kolom;$i++)

		echo $abjad[$i];
echo "<br>";
}
}

$kolom=3;
$baris=4;
print_abc($kolom,$baris);

?>