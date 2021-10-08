<!-- ## Snack 2
1) Passare come parametri GET name, mail e age 
2) verificare (cercando i metodi che non conosciamo nella documentazione) che:
    a) name sia più lungo di 3 caratteri,
    b) che mail contenga un punto e una chiocciola 
    c) che age sia un numero.
3) se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    // 'strpos()' controlla se ci sta l'indice dell'elemento cercato all'interno della stringa.    
    if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        echo 'Accesso riuscito';
    } 
    else
    {
        echo 'Accesso negato';
    }
?>