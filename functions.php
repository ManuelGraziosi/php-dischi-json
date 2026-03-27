<?php

// $disks = [
//     [
//         "titolo" => "The Dark Side of the Moon",
//         "artista" => "Pink Floyd",
//         "cover_url" => "https://upload.wikimedia.org/wikipedia/en/3/3b/Dark_Side_of_the_Moon.png",
//         "anno" => 1973,
//         "genere" => "Progressive Rock"
//     ],
//     [
//         "titolo" => "Thriller",
//         "artista" => "Michael Jackson",
//         "cover_url" => "https://upload.wikimedia.org/wikipedia/en/5/55/Michael_Jackson_-_Thriller.png",
//         "anno" => 1982,
//         "genere" => "Pop"
//     ],
//     [
//         "titolo" => "Abbey Road",
//         "artista" => "The Beatles",
//         "cover_url" => "https://upload.wikimedia.org/wikipedia/en/4/42/Beatles_-_Abbey_Road.jpg",
//         "anno" => 1969,
//         "genere" => "Rock"
//     ],
//     [
//         "titolo" => "Nevermind",
//         "artista" => "Nirvana",
//         "cover_url" => "https://upload.wikimedia.org/wikipedia/en/b/b7/NirvanaNevermindalbumcover.jpg",
//         "anno" => 1991,
//         "genere" => "Grunge"
//     ],
//     [
//         "titolo" => "Random Access Memories",
//         "artista" => "Daft Punk",
//         "cover_url" => "https://upload.wikimedia.org/wikipedia/en/a/a7/Random_Access_Memories.jpg",
//         "anno" => 2013,
//         "genere" => "Electronic"
//     ]
// ];

// //var_dump($disks);

// $text_disks = json_encode($disks);

// echo $text_disks;


$file_json_string = file_get_contents("disks.json");

$file_decoded = json_decode($file_json_string, true);

//var_dump($file_decoded);