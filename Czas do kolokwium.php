<html>
<head>
</head>
<body>
<h1>
<?php
$teraz = time();
$kolos = mktime(12,15,0,6,11,2018);
$dni = abs(floor(($kolos-$teraz)/86400));
$godziny = abs(ceil(($kolos-$teraz)/3600))%24;
$minuty = abs(ceil(($kolos-$teraz)/60))%60;
$sekundy = abs(ceil((($kolos-$teraz))%60));
echo ("Pozostalo: ".$dni." dni, ".$godziny." godzin, ".$minuty." minut, ".$sekundy." sekund");
?>
</h1>
</body>
</html>
