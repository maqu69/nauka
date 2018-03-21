<html>
<head>
    <title>Zadanie nr 3</title>
</head>
<body>
<form action="" method="POST">
    <p>Podaj kwote: </p>
    <input type="text" name="kwota"><br>
    <input type="submit" name="button" value="wyslij"><br>
    <?php


    $kwota=$_POST['kwota'];
    $dyszki=0;
    $piatki=0;
    $dwojki=0;
    $jedynki=0;

    while ($kwota>=10) {
        $dyszki+=1;
        $kwota=$kwota-10;
    }
    while ($kwota>=5) {
        $piatki+=1;
        $kwota=$kwota-5;
    }
    while ($kwota>=2) {
        $dwojki+=1;
        $kwota=$kwota-2;
    }

    while ($kwota>=1) {
        $jedynki+=1;
        $kwota=$kwota-1;
    }
if(isset($_POST['kwota'])) {
    echo "Podana kwota to: ".$_POST['kwota'];
    echo "<br>";
    echo "Banknotow 10 zlotowych znajduje sie : " . $dyszki;
    echo "<br>";
    echo "Banknotow 5 zlotowych znajduje sie : " . $piatki;
    echo "<br>";
    echo "Banknotow 2 zlotowych znajduje sie : " . $dwojki;
    echo "<br>";
    echo "Banknotow 1 zlotowych znajduje sie : " . $jedynki;
}
?>

</form>

</body>
</html>