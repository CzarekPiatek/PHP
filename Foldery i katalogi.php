<html>
<head>
</head>
<body>
<?php
$arr = scandir("./");
$foldery = array();
$pliki = array();
foreach($arr as $file)
{
	if($file != '.' && $file != '..')
	{
		if (is_file($file) == true)
		{
			array_push($pliki,$file);
		}
		else
		{
			array_push($foldery,$file);
		}
	}
}
echo("<b>Pliki</b><br>");
foreach($pliki as $file)
{
	echo ("$file <br>");
}
echo("<b><br>Foldery<br></b>");
foreach($foldery as $file)
{
	echo ("$file <br>");
}
?>
</body>
</html>
