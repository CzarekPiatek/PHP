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
<form action="Iloczyn skalarny wektorow3.php" method="POST"> 
<h1>Iloczyn skalarny wektorów</h1><br>
<?php
$skladniki = $_POST['lskladnikow'];
for($a=0;$a<$skladniki;$a++)
{
	echo("<input type=\"text\" name=\"wektora$a\">");
}
echo("<br>");
for($b=0;$b<$skladniki;$b++)
{
	echo("<input type=\"text\" name=\"wektorb$b\">");
}
echo ("<br><input type=\"submit\">");
echo ("<br><input type=\"hidden\" value=\"$skladniki\" name=\"ile\">");
?>
</form>
</div>
</body>
</html>
