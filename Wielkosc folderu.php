<html>
<head>
</head>
<body>
<?php
function getDirSize($dir)
{
	$size = 0;
	$arr = scandir($dir);
	foreach($arr as $file)
	{
		if($file != '.' && $file != '..')
		{
			if (is_file($dir."/".$file) == true)
			{
				echo "$file<br>";
				$sciezka = $dir."/".$file;
				$size += filesize("$sciezka");
			}
			else
			{
				echo "$file<br>";
				$sciezka = $dir."/".$file;
				$size += getDirSize($sciezka);
			}
		}
	}
	return $size;
}
echo getDirSize("./");
?>
</body>
</html>
