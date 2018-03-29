<html>
<head>
<title>Formularz HTML</title>
<style>
html
{
	text-align:center;
}
#box
{
	margin-left:auto;
	margin-right:auto;
	height:300px;
	width:600px;
	border-style:solid;
	border-color:lightblue;
}
</style>
</head>

<body>
<div id="box">
<form action="" method="GET">
<b> OBLICZANIE DATY WIELKANOCY </b><br><br>
PODAJ ROK <input type="text" name="rok"> <input type="submit" value="Oblicz" name="submit1"><br><br>
<b>
<?php
if(isset($_GET["submit1"]))
{
	$rok = $_GET["rok"];
	$x = 0;
	$y = 0;
	if($rok>=1 && $rok<=1582)
	{
		$x=15;
		$y=6;
	}
	elseif($rok>=1583 && $rok<=1699)
	{
		$x=22;
		$y=2;
	}
	elseif($rok>=1700 && $rok<=1799)
	{
		$x=23;
		$y=3;
	}
	elseif($rok>=1800 && $rok<=1899)
	{
		$x=23;
		$y=4;
	}
	elseif($rok>=1900 && $rok<=2099)
	{
		$x=24;
		$y=5;
	}
	elseif($rok>=2100 && $rok<=2199)
	{
		$x=24;
		$y=6;
	}
	else 
	{
		exit("Nieprawidlowy rok");
	}
	$a=$rok%19;
	$b=$rok%4;
	$c=$rok%7;
	$d=(19*$a+$x)%30;
	$f=(2*$b+4*$c+6*$d+$y)%7;
	if($f==6 && $d==29)
	{
		echo("Wielkanoc jest 26 kwietnia");
	}
	if($f==6 && $d==28 && ((11*$x+11)%30<19))
	{
		echo("Wielkanoc jest 18 kwietnia");
	}
	if(($d+$f)<10)
	{
		echo("Wielkanoc jest ".(22+$d+$f)." marca.");
	}
	if(($d+$f)>9)
	{
		echo("Wielkanoc jest ".($d+$f-9)." kwietnia.");
	}
}
?>
</b>
</form>
</div>
</body>
</html>