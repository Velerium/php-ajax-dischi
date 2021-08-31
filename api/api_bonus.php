<?php

require_once __DIR__ . "/../database/music_db.php";

$genreFilter = "Pop";  //edit this to change displayed records. Tried a select & submit, but no dice. Yet.

$filterGenre = function($item) use ($genreFilter) {
    return strtolower($item["genre"]) === strtolower($genreFilter);
};

$result = array_filter($records, $filterGenre);

header('Content-Type: application/json');
echo json_encode($result);
