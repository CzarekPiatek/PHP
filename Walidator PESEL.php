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
<b> Podaj pesel </b><br><br>
Pesel: <input type="text" name="pesel"> <input type="submit" value="Oblicz" name="submit1"><br><br>
<b>
<?php
if(isset($_GET["submit1"]))
{
	$pesel=$_GET["pesel"];
	function pesel($pesel)
	{
		$dzien = substr($pesel,4,2);
		$miesiac = substr($pesel,2,2);
		$rok = substr($pesel,0,2);
		$plec = substr($pesel,9,1);
		echo("Dzien urodzenia: ".$dzien. "<br>");
		$rok = $rok + 2000;
		if($rok > 2018)
		{
			$rok = $rok - 100;
		}
		else
		{
			$miesiac = $miesiac - 20;
		}
		$miesiace = array("styczen","luty","marzec","kwiecien","maj","czerwiec","lipiec","sierpien","wrzesien","pazdziernik","listopad","grudzien");
		echo("Miesiac urodzenia: ".$miesiace[$miesiac-1]."<br>");
		echo("Rok urodzenia: ".$rok."<br>");
		if($plec%2==0)
		{
			$plec = "Kobieta";
		}
		else
		{
			$plec = "Mezczyzna";
		}
		echo("Plec: ".$plec."<br>");
	}
	pesel($pesel);
}
?>
</b>
</form>
</div>
</body>
</html>