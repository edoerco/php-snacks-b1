<!-- #snack 8
Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. -->

<?php 

    include __DIR__ . '/database.php';


    $activeAdv = [];
    foreach ($ads as $ad) {
        if($ad['is_active']) {
            $activeAdv[] = $ad;
        }
    }
    $currentActive = $activeAdv[rand(0, count($activeAdv) - 1)];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="<?php echo $currentActive['link'] ?>">
            <img src="<?php echo $currentActive['image_path'] ?>">
        </a>
    </div>
</body>
</html>