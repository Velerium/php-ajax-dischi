<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi - Milestone One</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        
    require_once __DIR__ . "/./database/music_db.php";
       
 ?> 
    <div class="containerBigger">
        <header>
            <img src="./img/spotify-logo.png" alt="">
        </header>
        
        <div class="containerBig">
            <div class="container"> <?php

        foreach($records as $record) {
        echo "<div class=\"card\">
                    <div class=\"card-info\">
                        <img src=\"{$record['poster']}\" alt='image of {$record['title']}'>
                        <div class=\"card-more-info\">
                            <div class=\"card-title\">
                                <h2>{$record['title']}</h2> 
                            </div>
                            <div class=\"card-other-info\">
                                <div>{$record['author']}</div>
                                <div>{$record['year']}</div>
                            </div>
                        </div>
                    </div>
                </div>";
        };

    ?>     </div>
        </div>
    </div>
</body>
</html>