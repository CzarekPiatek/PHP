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
<b> Ciąg fibonacciego </b><br><br>
Podaj ktory wyraz ciagu obliczamy: <input type="text" name="fib"><br><br>
<input type="submit" value="Oblicz" name="submit1">
<b>
<?php
$fib = $_GET["fib"];
$pom = 1;
function fibonacci($fib)
{
	if ($fib == 1 || $fib == 2)
	{
		return 1;
	}
	else
	{
		return fibonacci($fib-1)+fibonacci($fib-2);
	}
}
echo fibonacci($fib);
?>
</b>
</form>
</div>
</body>
</html>