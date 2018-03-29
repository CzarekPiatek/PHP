<html>
<head>
<style>
#lotto
{
text-align:center;
margin-left:auto;
margin-right:auto;
padding:30px;
border:solid;
}
</style>
</head>
<body>
<div id="lotto">
<form action="" method="POST">

<?php
for($i = 1; $i < 4; $i++)
{
	for($j = 1; $j < 4; $j++)
	{
		echo("<input name=\"a$i$j\" size=\"5\" type=\"text\">");
	}
	echo("<br>");
}
?>

Wyznacznik macierzy A<br>
Det A = 
<?php
$tablica[9];
for($i = 1; $i < 4; $i++)
{
	for($j = 1; $j < 4; $j++)
	{
		 $tablica[$i][$j] = $_POST["a$i$j"];
	}
}
$suma = $tablica[1][1]*$tablica[2][2]*$tablica[3][3] + 
	$tablica[1][2]*$tablica[2][3]*$tablica[3][1] +
	$tablica[1][3]*$tablica[2][1]*$tablica[3][2] - 
	$tablica[1][3]*$tablica[2][2]*$tablica[3][1] - 
	$tablica[1][1]*$tablica[2][3]*$tablica[3][2] - 
	$tablica[1][2]*$tablica[2][1]*$tablica[3][3];

	echo("(".$tablica[1][1]."*".$tablica[2][2]."*".$tablica[3][3].") + (". 
	$tablica[1][2]."*".$tablica[2][3]."*".$tablica[3][1].") + (". 
	$tablica[1][3]."*".$tablica[2][1]."*".$tablica[3][2].") - (". 
	$tablica[1][3]."*".$tablica[2][2]."*".$tablica[3][1].") - (". 
	$tablica[1][1]."*".$tablica[2][3]."*".$tablica[3][2].") - (". 
	$tablica[1][2]."*".$tablica[2][1]."*".$tablica[3][3].") = ".$suma);

?>
<br>
<input name="wyslij" type="submit">
<input name="wyczysc" type="reset">

</form>
</div>
</body>
</html>
