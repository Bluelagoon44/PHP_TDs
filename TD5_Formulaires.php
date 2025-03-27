<?php
    // TD5
    $color = "FFFFFF";
    if(isset($_POST["color"])){
        if(strlen($_POST["color"]) === 6 || strlen($_POST["color"]) === 7){
            $color = htmlspecialchars(str_replace("#", "", $_POST["color"]));
        }
    }
    
    // TD5 - Facultatif
    $colors = str_split($color,2);
    foreach($colors as $key => $colorValue){
        $colors[$key] = hexdec($colorValue);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                background-color : <?= "#$color" ?>;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="color" />
            <button>Valider</button>
        </form>
        <!-- TD5 - Facultatif -->
        <?= "<p>rgb(" . $colors[0] . "," . $colors[1] . "," . $colors[2] . ")</p>" ?>
    </body>
</html>