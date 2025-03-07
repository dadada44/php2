<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("components/header.php")?>
    <h1>PHP projekt</h1>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "prvni_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT 
ID,
Nazev_produktu,
Cena_za_kus,
Pocet_kusu FROM zbozi";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["ID"]. " - Name: " . $row["Nazev_produktu"]. " " . $row["Cena_za_kus"]. " KČ".  "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>


