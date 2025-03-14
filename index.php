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

      
    if ($result->num_rows > 0) {
        echo "<table>
                <tbody>
                    <tr>
                        <th>Id</th>
                        <th>Název produktu</th>
                        <th>Cena za kus</th>
                        <th>Počet kusů</th>
                    </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["ID"] . "</td> 
                    <td>" . $row["Nazev_produktu"] . "</td>
                    <td>" . $row["Cena_za_kus"] . " Kč</td>
                    <td>" . $row["Pocet_kusu"] . "</td>
                  </tr>";
        }

        echo "</tbody>
        </table>";
    } else {
        echo "0 results";
      }


?>


<style>
  table{
    border: 1px solid black;
  }

  th, td{
    border: 1px solid black;

  }
</style>

