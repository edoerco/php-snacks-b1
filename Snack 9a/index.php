<!-- ## Snack 9A
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica. -->

<?php 

    include __DIR__ . '/database.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 9a</title>
</head>
<body>

    <?php 
        foreach($hotels as $hotel) {
            if($hotel['distance_to_center'] == true) {
                echo 'si';
            } 
            else 
            {
                echo 'no';
            }

            echo "<div>";
                    echo "<h1>$hotel[name]</h1>";
                    echo "<p>$hotel[description]</p>";
                    echo "<p>parcheggio : $hotel[parking]</p>";
                    echo "<p>voto : $hotel[vote]</p>";
                    echo "<p>distante dal centro : $hotel[distance_to_center]km</p>";
            echo "</div>";
        }
    ?>

</body>
</html>