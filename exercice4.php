<?php 
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t2'];
$d=$_REQUEST['t2'];
$e=$_REQUEST['t2'];

$r=($a*2+$b*2+$c*2+$d*3+$e*3)/12;

if ($r<10)
	$p="Refuser";
if ($r>=10)
	$p="Admis";
if ($r>=15)
	$p="Admis mention bien";

echo "vous etes " .$p. "<br>";





?>