<?php
function solution(){
		$n = 24;
		$q = 0;
		for ($x = 1;$x<=$n; $x++){
			$i = $n%$x;
		if ($i == 0){$q++;}
			
		}
		echo $q;
	}
	solution();
?>
