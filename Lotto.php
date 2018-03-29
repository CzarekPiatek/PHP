<html>
<head>
</head>
<body>
<?php
$tablica = array("Telewizor","Książka kucharska","Słuchawki","Stół kuchenny","Kawa inka");
echo("<pre>");
print_r($tablica);
array_push($tablica,"Telefon","Plecak");
print_r($tablica);
unset($tablica[1],$tablica[3]);
print_r($tablica);
$ciag = "To jest@przykladowy@ciag znakow";
echo($ciag);
$tabciag = explode("@",$ciag);
print_r($tabciag);
$tablicastring = implode("[#]",$tablica);
echo ($tablicastring);
echo("</pre>");
?>
</body>
</html>