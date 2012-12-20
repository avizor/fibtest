<?php

$n = $_GET['n'];

$fibOfN = getFib($n);

echo "FIB ON N IS: " .$fibOfN;

function getFib($n)
{
	if($n == 0 || $n == 1)
	{
		return 1;
	}
	else
	{
		return getFib($n-1) + getFib($n-2);
	}
}

?>