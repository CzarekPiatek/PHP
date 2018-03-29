<html>
<head>
<title>Formularz HTML</title>
<style>
body {
	font-size:14px;
    font-family: 'Trebuchet MS'; 
    color: #CECECE; 
    background-color: #161616; 
}
</style>
</head>

<body>
<h1>Kalkulator</h1>
<hr>
<form action="" method="GET">
	<input type="text" name="a"> 
	<select name="prosty">
		<option value="dodawanie">dodawanie</option>
		<option value="odejmowanie">odejmowanie</option>
		<option value="mnozenie">mnozenie</option>
		<option value="dzielenie">dzielenie</option>
	</select>
	<input type="text" name="b">
	<br>
	<input type="submit" value="Oblicz" name="submit1"><br>
	<?php
	if(isset($_GET['submit1']))
	{
		$a=$_GET["a"];
		$b=$_GET["b"];
		$co=$_GET["prosty"];
		switch($co)
		{
			case dodawanie:
				echo($a+$b);
				break;
			case odejmowanie:
				echo($a-$b);
				break;
			case mnozenie:
				echo($a*$b);
				break;
			case dzielenie:
				echo($a/$b);
				break;
		}
	}
?>
	<hr>
	<h1>Zaawansowany</h1>
	<input type="text" name="c">
	<select name="zaawansowany">
		<option value="cosinus">cosinus</option>
		<option value="sinus">sinus</option>
		<option value="tangens">tangens</option>
		<option value="bindec">binarny na dziesietny</option>
		<option value="decbin">dziesietny na binarny</option>
		<option value="dechex">dziesietny na szesnastkowy</option>
		<option value="hexdec">szesnastkowy na dziesietny</option>
		<option value="degrad">stopnie na radiany</option>
		<option value="raddeg">radiany na stopnie</option>
	</select>
	<br>
	<input type="submit" value="Oblicz" name="submit2"><br>
	<?php
	if(isset($_GET['submit2']))
	{
		$c=$_GET["c"];
		$zaaw=$_GET["zaawansowany"];
		switch($zaaw)
		{
			case cosinus:
				echo(cos($c));
				break;
			case sinus:
				echo(sin($c));
				break;
			case tangens:
				echo(tan($c));
				break;
			case bindec:
				echo(bindec($c));
				break;
			case decbin:
				echo(decbin($c));
				break;
			case dechex:
				echo(dechex($c));
				break;
			case hexdec:
				echo(hexdec($c));
				break;
			case degrad:
				echo(degrad($c));
				break;
			case raddeg:
				echo(raddeg($c));
				break;
		}
	}
?>
</form>

</body>
</html>