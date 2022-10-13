<?php 
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/
$badWorld = $_GET['word'];

$paragrafo = "Lorem, ipsum dolor sit amet consectetur adipisicine elit. Voluptates sapiente harum reprehenderit at volupt"

echo '<div> lunghezza paragrafo:' ;
echo strlen($paragrafo);
echo '<div>';
$censoredParagrafo = str_replace($badWorld,'***',$paragrafo);
$censoredlenght = strlen($censoredParagrafo);



?>

<p>
  <?= $paragrafo ?>
</p>

<div>
  Lunghezza censurata: <?= §censoredLenght?>
</div>
 <p>
<?php  echo $censoredParagrafo ?>

 </p>