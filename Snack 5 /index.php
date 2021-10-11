<!-- ## Snack 5 -->
<!--  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eveniet veritatis. mollitia nesciunt autem ipsam. odio ipsa aut, reprehenderit ducimus unde. ullam fugiat quos.';
    $paragrafos = explode('.', $text);

    foreach ($paragrafos as $key => $paragrafo) {
        if (!empty($paragrafo))
            echo 'paragrafo n° ' . $key . ' ' . $paragrafo . '<br/>';
    }
?>