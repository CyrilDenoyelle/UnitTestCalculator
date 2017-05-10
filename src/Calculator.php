<?php 
class Calculator
{
	function calculate($inp){
		if($inp){
			if(strpos($inp, '+')>-1){
				return array_sum(explode("+", $inp));
			}else{
				return $inp;
			}
		}else{
			return 0;
		}
	}
}
?>