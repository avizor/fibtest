<?php

require_once "fib.php";

function testFib(){
	$expected = array(1,1,2,3,5,8,13,21);

	for($i =0; $i<count($expected); $i++){
		if(getFib($i) != $expected[$i]){
			echo "fib($i): failed, should be ".$expected[$i]." is actually ".getFib($i);
			return false;
		}
	}
	return true;
}

if(testFib()) {
	echo "Passed!";
}
else{
	echo "Failed";
	die("That is why you fail!");
}

?>