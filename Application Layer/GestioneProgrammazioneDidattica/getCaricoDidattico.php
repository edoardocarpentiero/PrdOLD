<?php
	require("GestioneProgrammazioneDidattica.php");
	$gestione=new GestioneProgrammazioneDidattica();
    if($_POST['id'] == "caricoDidattico"){
    	$rit=$gestione->getCaricoDidattico($_POST['user']);
    }
    else if($_POST['id'] == "monteOre"){
    	$rit=$gestione->getMonteOre($_POST['nome'],$_POST['cognome']);
    }
	echo $rit;
?>