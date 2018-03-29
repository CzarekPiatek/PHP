<html>
<head>
</head>
<body>
<?php
function usun($dir)
{
	echo("Usunieto: ");
	$arr = scandir($dir);
	foreach($arr as $file)
	{
		if($file != '.' && $file != '..')
		{
			if (is_file($dir."/".$file) == true)
			{
				echo ("$file ");
				unlink($dir."/".$file);
			}
			else
			{
				echo (" $file<br>");
				usun($dir."/".$file);
				rmdir($dir."/".$file);
			}
			
		}
	}
}
echo usun("./Katalog");
?>
</body>
</html>
