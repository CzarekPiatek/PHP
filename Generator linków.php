<html>
<head>
</head>
<body>
<?php
if(!$file = fopen("linki.txt","r"))
{
	echo("Wystapil blad");
}
else
{
	while(!feof($file))
	{
		$linia = fgets($file);
		$pom = strpos($linia," ");
		$link = substr($linia,0,$pom);
		$opis = substr($linia,$pom+1);
		echo ("<a href=\"$link\">$opis</a><br>");
	}
}
?>
</body>
</html>