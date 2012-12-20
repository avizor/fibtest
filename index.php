<?php

require_once "fib.php";

$n = $_GET['n'];

$fibOfN = getFib($n);

echo $fibOfN;

?>