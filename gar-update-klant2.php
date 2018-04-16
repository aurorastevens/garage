<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
</head>
<body>
<h1>Garage update klant 2</h1>
<p>Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel klan y van de database garage.</p>

<?php

$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$sql->execute();

echo "<table>";
foreach ($klanten as $klant ){

    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantidvak'";
    echo " value='" . $klant ["klantid"]." '> <br/> ";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantnaamvak'";
    echo "value='" . $klant ["klantnaam"]."'";
    echo "><br/>";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantnaamvak'";
    echo " value='" . $klant ["klantnaam"]."'";
    echo "><br/>";

    echo "klantadres: <input type='text'";
    echo "name = 'klantadresvak'";
    echo " value='" . $klant ["klantadres"]."'";
    echo "><br/>";

    echo "klantpostcode: <input type='text'";
    echo "name = 'klantpostcodevak'";
    echo " value='" . $klant ["klantpostcode"]."'";
    echo "><br/>";

    echo "klantplaats: <input type='text'";
    echo "name = 'klantplaatsvak'";
    echo " value='" . $klant ["klantplaats"]."'";
    echo "><br/>";
}

echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>