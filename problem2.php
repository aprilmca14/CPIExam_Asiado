<?php
//count the number of jump performed
	function solution(){
		$x = 10;
		$y = 150;
		$d = 30;
		$i = 0;
		
		while($x <= $y){
			$x = $x+ $d;
			$i++;
		}
	echo $i;
		
	}
	solution();
?>
