<?php
    $preinit=;
    $prered=$preinit*0.95;
    $canbot=$_POST['cangas'];
    $imptot=$prered*$canbot;
    $desimp=$imptot*0.07;
    $imppag=$imptot-$desimp;
    $obs=2*$canbot;
?>