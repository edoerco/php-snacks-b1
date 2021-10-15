<!-- ## Snack 9B
Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
Se non c’è un filtro, visualizzare come in precedenza tutti gli hotel -->

<?php 

    include __DIR__ . '/database.php';
    $parking = $_GET['parking'];
    $stars = $_GET['stars'];
    $km = $_GET['km'];
    $center = $_GET['center'];

    if (isset($parking)) {
        $filteredHotels = [];
        foreach($hotels as $hotel) {
            ($hotel['parking'] ? array_push($filteredHotels, $hotel) : null);
        }
    } 
    else if (isset($stars)) {
        $filteredHotels = [];
        foreach($hotels as $hotel) {
            ($hotel['vote'] > $stars ? array_push($filteredHotels, $hotel) : null);
        }
    }
    else if (isset($center)) {
        $km;
        ($hotel['km'] < $km ? array_push($filteredHotels, $hotel) : null);
    }
    else
    {
        $filteredHotels = $hotels;
    }


    // isset ( misto $var , misto ...$vars )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 9b</title>
</head>
<body>
    
    <ul>
        <?php foreach($filteredHotels as $hotel) {?>
            <li> <?php echo $hotel['name'] ?> </li>
        <?php } ?>
    </ul>

</body>
</html>