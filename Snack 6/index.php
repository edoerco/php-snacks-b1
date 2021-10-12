<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Includerlo in un file database.php... 
Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.  -->

<?php 

    include __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="grey">
        <?php 
            foreach ($db['teachers'] as $teacher) {
                echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br/>';
            }
        ?>
    </div>

    <div class="green">
        <?php 
            foreach ($db['pm'] as $pm) {
                echo $pm['name'] . ' ' . $pm['lastname'] . '<br/>';
            }
        ?>
    </div>
</body>
</html>