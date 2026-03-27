<?php

//leggere i dati ricevuti
//var_dump($_POST);
$recived_data = $_POST;
// echo "\$recived_data";
//var_dump($recived_data);

// leggere file json

$file_json_string = file_get_contents("disks.json");
// echo "\$file_json_string";
// var_dump($file_json_string);


//conversione dati da json a PHP tramite decode
$file_decoded = json_decode($file_json_string, true);
// echo "\$file_decoded";
// var_dump($file_decoded);

//modifica dati 
//inserendo nuovo album

$file_decoded[] = $recived_data;
// echo "\$file_decoded updated";
// var_dump($file_decoded);

// riconvertiamo dati PHP in json con encode
$file_json_update = json_encode($file_decoded);

// sovrascriviamo il file
file_put_contents("disks.json", $file_json_update);

header("Location: index.php");
exit;