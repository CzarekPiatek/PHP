<html>
<head>
</head>
<body>
<h1>
<?php
$dni = array("poniedzialek","wtorek","sroda","czwartek","piatek","sobota","niedziela");
$miesiace = array("styczen","luty","marzec","kwiecien","maj","czerwiec","lipiec","sierpien","wrzesien","pazdziernik","listopad","grudzien");
$m = date("n");
$d = date("w");
echo ("Dzis jest ".$dni[$d-1].", ".date(d)." ".$miesiace[$m-1]." ".date(Y).", ".date("G:i:s a").", ".date(O)." GMT");
?>
</h1>
</body>
</html>
