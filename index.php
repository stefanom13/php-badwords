<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.

<?php


$text = 'Inizia con la lettera “c” e finisce con la “o”, è duro e peloso. Cos’è? Il Cocco!';
$lunghezza_testo = strlen($text);

if (isset($_GET['parola_inserita'])) {

    $parola_inserita = $_GET['parola_inserita'];
    $testo_modificato = str_replace($parola_inserita, '***', $text);
} else {
    $testo_modificato = $text;
};
$lunghezza_testomodificato = strlen($testo_modificato);


// $testo_modificato = str_replace ($parola_inserita,'***',$text);

// $testo_modificato = str_replace( 'co', '***', $text );

// $lunghezza_testomodificato = strlen ($testo_modificato);



?>


Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare. -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $text; ?></h1>
    <h3> il testo è lungo :<?php echo $lunghezza_testo; ?> </h3>
    <h3> la parola inserita è :<?php echo $parola_inserita; ?></h3>

    <h2> il nuovo testo è : <?php echo $testo_modificato; ?> </h2>
    <h3> il testo ora è lungo :<?php echo $lunghezza_testomodificato; ?></h3>


</body>

</html>