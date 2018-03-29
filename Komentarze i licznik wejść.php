<html>
<head>
</head>
<body>
<?php
$licznik = file_get_contents("licznik.txt");
$licznik = ++$licznik;
if(file_put_contents("licznik.txt", $licznik) === false)
	{
		echo("Wystapil blad");
	}
echo ("Liczba odslon: ".file_get_contents("licznik.txt"));
?>
<form action="" method="POST">
<b>Wyraz swoja opinie:</b><br>
(maksymalnie 255 znakow)<br>
<textarea name="opinia" rows="10" cols="40"></textarea><br>
<input type="submit" name="submit" value="Wyslij">
</form>
<br>
Dotychczasowe opinie:
<br><br>
<?php
$opinia = date("d-m-Y G:i:s")." ".$_POST["opinia"];
$submit = $_POST["submit"];
if(isset($submit))
{
	$opinia = substr($opinia,0,255);
	$opinia .= "\n\n";
	$stare = file("opinie.txt");
	if(file_put_contents("opinie.txt", $opinia) === false)
	{
		echo("Wystapil blad");
	}
	if(file_put_contents("opinie.txt", $stare, FILE_APPEND) === false)
	{
		echo("Wystapil blad");
	}
}
if(filesize("opinie.txt") == 0)
	{
		echo("Jeszcze nikt nie dodal opinii, badz pierwszy");
	}
echo nl2br(file_get_contents("opinie.txt"));
?>
</body>
</html>