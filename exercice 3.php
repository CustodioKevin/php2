<?php
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$op=$_REQUEST['t3'];



if ($op=="+")
	$s=$a+$b;
if ($op=="/")
	$s=$a/$b;
if ($op=="%")
	$s=$a%$b;
if ($op=="-")
	$s=$a-$b;

echo 'voila le resultat :'. $s. "<br>";
?>