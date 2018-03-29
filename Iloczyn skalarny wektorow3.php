<html>
<head>
<style>
#lotto
{
text-align:center;
margin-left:auto;
margin-right:auto;
border:solid;
}
</style>
</head>
<body>
<div id="lotto">
<h1>Iloczyn skalarny wektorów</h1><br>
<?php
$ile = $_POST['ile'];
$wektora = array();
$wektorb = array();
$wektorc = array();
for($a=0;$a<$ile;$a++)
{
	$wektora[$a] = $_POST["wektora$a"];
	$wektorb[$a] = $_POST["wektorb$a"];
}
for($a=0;$a<$ile;$a++)
{
	$wektorc[$a] = $wektora[$a]*$wektorb[$a];
}
$suma = 0;
for($a=0;$a<$ile;$a++)
{
	$suma = $suma + $wektorc[$a];
}
echo("Wektor skalarny dwoch wektorow wynosi:<br><h1>$suma</h1>");
?>
</div>
</body>
</html>
