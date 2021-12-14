<?php 
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];


$s=$a+$b;
$p=$a*$b;
$r=$a%$b;
$d=$a/$b;

print 'voila la somme: ' . $s.'<br>';
print 'voila le produit: ' . $p.'<br>';
print 'voila le reste de la division: ' . $r.'<br>';
print 'voila la division: ' . $d.'<br>';
?>
