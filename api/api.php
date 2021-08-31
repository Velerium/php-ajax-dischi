<?php

require_once __DIR__ . "/../database/music_db.php";

header('Content-Type: application/json');
echo json_encode($records);
