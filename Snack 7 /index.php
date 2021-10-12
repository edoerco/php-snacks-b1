<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

    include __DIR__ . '/database.php';
    include __DIR__ . '/function.php';

    foreach ($classe as $alunno) {
        // echo $key . ' ' . $alunno;
        echo 'Alunno : ' . $alunno['nome'] . ' ' . $alunno['cognome'] . ' ' . media($alunno['voti']) . '<br/>';
    }
    

?>