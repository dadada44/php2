<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("../../components/header.php");
        $name ="Petr";
        $text = "Uzivatel";
    ?>
    <h1>PHP projekt, Uvod</h1>

    <p>Zde je jmeno: <?php echo "$name K.";?></p>

    <?php echo "<h3> Promenna: $name </h3>"?>

    <?php
        $i = 1;

        while ($i <= 6) {
            echo "<h3> $text $i </h3>";
            $i++;
        }


        for ($j = 1; $j <= 10; $j++) {
            echo "The number is: $j <br>";
        }

        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo "<h3> $text $i </h3>";
            }
        }

    
    ?>

</body>
</html>