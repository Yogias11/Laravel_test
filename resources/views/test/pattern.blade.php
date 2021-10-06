<?php
    echo "**********";
    echo "<br>";
	$star=4;
	for($a=1; $a<=$star; $a++){
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}

    for($a=$star-1;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}
    echo "**********";

?>
