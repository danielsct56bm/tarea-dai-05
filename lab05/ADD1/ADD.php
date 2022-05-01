<?php
    $suelinit=600;
    $porimp=$_POST['imptot']*0.075;
    $bonhij=$_POST['numhij']*50;
    $salbru=$suelinit+$porimp+$bonhij;
    $dessal=$salbru*0.11;
    $salnet=$salbru-$dessal;
?>