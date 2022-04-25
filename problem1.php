<?php
	function solution(){
	 $n = 24;
	 $i = 1;
	 $d = 0;
	 while($i<=$n){
		 $f = $n/$i;
		if(is_integer($f)){$d++;}
		$i++;
		
	 }
	 echo $d;
	}
	solution();
?>