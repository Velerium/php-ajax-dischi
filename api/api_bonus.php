<?php

require_once __DIR__ . "/../database/music_db.php";

$chosenGenre = $_GET['genre'];  //edit this to change displayed records. Tried a select & submit, but no dice. Yet.

if ($chosenGenre === "All") {
    $result = $records;
} else {
    $filterGenre = function($item) use ($chosenGenre) {
        return ($item["genre"]) === $chosenGenre;
    };
    $result = array_filter($records, $filterGenre);
};


header('Content-Type: application/json');
echo json_encode($result);
