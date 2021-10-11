<!-- ## Snack 4 -->
<!--  Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $randomNum = [];
    $counter = 15;

    while(count($randomNum) < $counter) {
        $tmp = rand(1, 100);
        
        if(!in_array($tmp, $randomNum)) {
            $randomNum[] = $tmp;  
        }
    };
    var_dump($randomNum);
?>