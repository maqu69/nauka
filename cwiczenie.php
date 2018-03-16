<html>
<head></body>
<body>
Podaj liczbe sekundow<br />
<form action="sekundy.php" method="post">
    <input type="text" name="sekundy"><br />
    <input type="submit" method="post" value="Wyslij" />
</form>

<?php
$sekundy = $_POST['sekundy'];
echo "Ilosc podanych sekund wynosi: ".$sekundy."<BR /><BR />";

$minuty=$sekundy/60;
$godziny=$sekundy/3600;
$dni=$godziny/24;
$lata=$dni/365;

echo "Ilosc minut wynosi: ".$minuty."<BR />";
echo "Ilosc godzin wynosi: ".$godziny."<BR />";
echo "Ilosc dni wynosi: ".$dni."<BR />";
echo "Ilosc lat wynosi: ".$lata."<BR />";

?>

</body>
</html>