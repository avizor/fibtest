<?php

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