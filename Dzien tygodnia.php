<html>
<head>
</head>
<body>
<form action="" method="POST">
Podaj dzien<input type="text" name="dzien"><br>
Podaj miesiac<input type="text" name="miesiac"><br>
Podaj rok<input type="text" name="rok"><br>
<input type="submit">
</form>
<h1>
<?php
$dzien = $_POST["dzien"];
$miesiac = $_POST["miesiac"];
$rok = $_POST["rok"];
$dni = array("poniedzialek","wtorek","sroda","czwartek","piatek","sobota","niedziela");
$data1 = mktime(0,0,0,$miesiac,$dzien,$rok);
$data2 = date("w",$data1);
echo $dni[$data2-1];
?>
</h1>
</body>
</html>
