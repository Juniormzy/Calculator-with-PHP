<center><h1>Result</h1>
<?php 
$bb = $_GET['first'];
$aa = $_GET['second'];
$nn = $_GET['third'];
$cc = $_GET['fourth'];
if ($bb=="+")
{
echo $aa + $nn;
}
elseif ($bb=="-") {
	echo $aa-$nn;
}
elseif ($bb=="*") {
	echo $aa * $nn;
}
elseif ($bb=="/") {
	echo $aa / $nn;
}
 ?>
 </center>