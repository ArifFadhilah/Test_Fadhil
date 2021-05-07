<?php

$array = array(1,-1,3,-4,5,-2,7,4,2);

for ($a = 0; $a <= sizeof($array); $a++){
	for ($j=$a+1; $j <= sizeof($array)-1; $j++) { 
		if($array[$a] == $array[$j] || $array[$a] == -1*$array[$j]){
			$tmp[] =  abs($array[$a]);
			sort($tmp);
		}
	}
	
}
print_r($tmp);

?>