<!-- ## Snack 1
1) Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
2) Stampiamo a schermo tutte le partite con questo schema. 
es: Olimpia Milano - Cantù | 55-60 -->

<?php 
    // creo l'array
    $partite = [
        [
            'teamCasa' => 'Olimpia Milano',
            'teamOspiti' => 'Cantù',
            'puntiCasa' => 55,
            'puntiOspiti' => 60
        ],
        [
            'teamCasa' => 'Roma',
            'teamOspiti' => 'Bari all-star',
            'puntiCasa' => 50,
            'puntiOspiti' => 70
        ],  
        [
            'teamCasa' => 'Palermo',
            'teamOspiti' => 'Lecce',
            'puntiCasa' => 78,
            'puntiOspiti' => 42
        ],
    ];

    // effettuo ciclo for 
    for ($i = 0; $i < count($partite); $i++) {
        // ricordarsi che il punto sostituisce il + 
        echo $partite[$i]['teamCasa'] .  ' - ' .  $partite[$i]['teamOspiti'] . ' | ' . $partite[$i]['puntiCasa'] . '-' . $partite[$i]['puntiOspiti'] . '<br/>' ;
    };
?>
